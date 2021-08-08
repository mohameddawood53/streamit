<?php


namespace App\Http\Repositories;


use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Requests\updateUserProfileReq;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

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

    public function updatePass(Request $request)
    {
        $user = Auth::user();
        if(Hash::check($request->password, $user->password))
        {
            toast(__("settings.password identical"),'error');
            return redirect()->to("settings");
        }else{
            $user->password = bcrypt($request->password);
            $user->save();
            toast(__("home.update success"),'success');
        }
        return redirect()->to("settings");

    }



}
