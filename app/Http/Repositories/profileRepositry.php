<?php


namespace App\Http\Repositories;


use App\Http\Requests\updateUserProfileReq;
use Illuminate\Support\Facades\File;

class profileRepositry
{

    public function update(updateUserProfileReq $request)
    {
        $user = auth()->user();
        $user->lang = $request->lang;
        if ($request->img)
        {
            if (!empty($user->img))
            {
                File::delete(public_path("storage/" . $user->img));
            }
            $user->img = $request->img->store("user" , "public");
        }
        $user->save();
        toast(__("home.update success"),'success');
        return redirect()->to("profile");
    }

}
