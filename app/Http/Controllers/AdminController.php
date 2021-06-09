<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view ('admin.index');
    }

    public function page1(){
        return view('admin.page1');
    }

    public function page2(){
        return view('admin.page2');
    }
}
