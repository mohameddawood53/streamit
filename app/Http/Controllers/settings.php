<?php

namespace App\Http\Controllers;

use App\Http\Repositories\profileRepositry;
use App\Http\Repositories\subcribtionRepositry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class settings extends Controller
{
    private $subcribtionRepositry;
    private $profileRepositry;
    public function __construct(subcribtionRepositry $subcribtionRepositry, profileRepositry $profileRepositry)
    {
        $this->subcribtionRepositry = $subcribtionRepositry;
        $this->profileRepositry = $profileRepositry;
    }

    public function index()
    {
        return view("settings")->with("devices" , Auth::user()->devices);
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

    public function updatePass(Request $request)
    {
//        dd($request);
        return $this->profileRepositry->updatePass($request);
    }
}
