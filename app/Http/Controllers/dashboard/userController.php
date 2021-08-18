<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view("dashboard.users", ["users" => $users]);
    }
}
