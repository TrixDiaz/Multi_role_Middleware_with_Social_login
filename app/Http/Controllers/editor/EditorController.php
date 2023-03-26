<?php

namespace App\Http\Controllers\editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function editorHome()
    {
        return view('home', ["msg" => "I am Editor role"]);
    }
}
