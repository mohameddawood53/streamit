<?php


namespace App\Http\Repositories;


use App\Models\User;

class subcribtionRepositry
{
    public function cancel($id){
        $user = User::find($id);
        $user->pck_start = null;
        $user->pck_end = null;
        $user->save();
    }

    public function change($id, $package)
    {
        $user = User::find($id);
        if (in_array($package, [User::IS_MONTHLY, User::IS_THREE_MONTH, User::IS_YEARLY]))
        {
            $user->package = $package;
        }else{
            toast(__("settings.please select on package from list"),'error');
            return redirect()->to("settings");
        }
        $user->save();
        toast(__("settings.please select on package from list"),'error');
        return redirect()->to("pay");
    }

}
