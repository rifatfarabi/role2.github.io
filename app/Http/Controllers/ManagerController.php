<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index(){
        return view ('manager.index');
    }
    public function page1(){
        return view('manager.page1');
    }

    public function page2(){
        return view('manager.page2');
    }
}
