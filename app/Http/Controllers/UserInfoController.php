<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function main ()
    {
        return view('userForm', $_GET);
    }
}
