<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryAddRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view("dashboard.category.index",['cats' =>  Category::all()]);
    }

    public function add()
    {
        return view("dashboard.category.add");
    }

    public function main()
    {
        $cats = Category::whereNull("parent_id")->get();
        $data = array();
        foreach ($cats as $cat)
        {
            $data[] = [
                "id" => $cat->id,
                "name" => $cat->name,
                "parent_id" => $cat->parent_id,
                "created_at" => $cat->created_at,
                "updated_at" => $cat->updated_at
            ];
        }
        return response()->json($data);
    }

    public function sub()
    {
        $cats = Category::whereNotNull("parent_id")->get();
        $data = array();
        foreach ($cats as $cat)
        {
            $data[] = [
                "id" => $cat->id,
                "name" => $cat->name,
                "parent_id" => $cat->parent_id,
                "created_at" => $cat->created_at,
                "updated_at" => $cat->updated_at
            ];
        }
        return response()->json($data);
    }

    public function store(CategoryAddRequest $request)
    {


        $cat = new Category();
        $trans = [
            "ar" => $request->name_ar,
            "en" => $request->name_en
        ];

        $cat->setTranslations("name" , $trans);
        if ($request->main and $request->type == 2)
        {
            $cat->parent_id = $request->main;
        }elseif ($request->sub and $request->type == 3)
        {
            $cat->parent_id = $request->sub;
        }

        $cat->save();
        return redirect()->to(route("categories.index"));
    }
    public function destroy(Category $category)
    {
        $category->delete();
        toast(__("dashboard.success delete cat") , "success");
        return back();
    }

    public function edit(Category $category)
    {
        return view("dashboard.category.edit")->with("category",$category);
    }

    public function update(Category $category, Request $request)
    {
        $trans = [
            "ar" => $request->name_ar,
            "en" => $request->name_en
        ];

        if ($request->main and $request->type == 2)
        {
            $category->parent_id = $request->main;

        }elseif ($request->sub and $request->type == 3)
        {
            $category->parent_id = $request->sub;
        }
        $category->name = $trans;
        $category->save();
        return redirect()->to(route("categories.index"));
    }
}
