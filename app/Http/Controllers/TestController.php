<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
      //return "testctr";
      return view('test');
    }

    public function post(){
      return view('test');
    }
}
