<?php

namespace App\Http\Controllers;

use App\Http\Repositories\profileRepositry;
use App\Http\Requests\updateUserProfileReq;
class profile extends Controller
{
    private $profileRepositry;
    public function __construct(profileRepositry $profileRepositry)
    {
        $this->profileRepositry = $profileRepositry;
    }

    public function index()
    {
        return view("profile");
    }

    public function update(updateUserProfileReq $request)
    {
        return $this->profileRepositry->update($request);
    }
}
