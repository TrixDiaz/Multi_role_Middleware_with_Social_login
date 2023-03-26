<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminHome()
    {
        return view('home', ["msg" => "I am Admin role"]);
    }
}
