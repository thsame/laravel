<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class TestController extends Controller
{
  public function index(){
    //return "testctr";
    return view('test');
  }

  public function post(){
    //dd($_POST);
    if($_POST['text'] == 'WordPress'){
      return view('wp');
    }elseif($_POST['text']=='BBS') {
      $posts = Post::latest()->get();
      //dd($posts->ToArray());
      return view('BBS',['posts'=>$posts]);
    }elseif($_POST['text'] == 'taxi'){
      return view('taxi_driver');
    }elseif($_POST['text'] == 'address'){
      return view('address');
    }else{
      return view('test');
    }
  }

  public function new_post(){
    $posts = new Post();
    $posts->create(['title'=>$_POST['title'],'body'=>nl2br($_POST['body'])]);
    $posts = Post::latest()->get();
    return view('BBS',['posts'=>$posts]);
  }
}
