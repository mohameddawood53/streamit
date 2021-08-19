<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\addUser;
use App\Models\roles;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        $users = User::get()->all();

        return view("dashboard.users")->with("users" , $users);
    }

    public function add()
    {
        $this->authorize("viewAdd" , User::class);
        $roles = roles::all();
        return view("dashboard.adduser" , ["roles" => $roles]);
    }

    public function store(addUser $request)
    {
        $this->authorize("create" , User::class);
//        dd($request->role_id);
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "password" => bcrypt($request->password),
            "package" => $request->package,
            "lang" => $request->lang,
            "role_id" => $request->role_id
        ]);
        return redirect()->to(route("dashboard.users"));

    }

    public function delete($id)
    {
        $user = User::find($id);
        $this->authorize("delete" ,$user);
//        dd($id);
        $user->delete();

        toast(__("dashboard.success delete"), "success");
        return redirect()->to(route("dashboard.users"));
    }


}
