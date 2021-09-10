<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class moviesController extends Controller
{
    public function index()
    {

    }


    public function add()
    {
        return view("dashboard.language.add");
    }
}
