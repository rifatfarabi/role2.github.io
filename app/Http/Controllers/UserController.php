<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view ('user.index');
    }
    public function page1(){
        return view('user.page1');
    }

    public function page2(){
        return view('user.page2');
    }
}
