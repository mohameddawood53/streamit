<?php

namespace App\Http\Controllers;

use App\Http\Repositories\subcribtionRepositry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class settings extends Controller
{
    private $subcribtionRepositry;
    public function __construct(subcribtionRepositry $subcribtionRepositry)
    {
        $this->subcribtionRepositry = $subcribtionRepositry;
    }

    public function index()
    {
        return view("settings");
    }

    public function signout(Request $request)
    {
        Auth::logoutOtherDevices($request->password);
        Auth::logoutCurrentDevice();
        return redirect()->to("/");
    }

    public function cancel(){
         $this->subcribtionRepositry->cancel(Auth::id());
         Auth::logoutCurrentDevice();
         return redirect()->to("pay");
    }

    public function update(Request $request)
    {

        return $this->subcribtionRepositry->change(Auth::id(),$request->package);
    }
}
