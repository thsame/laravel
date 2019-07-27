@extends('layout')

@section('content')

<h1 class = "">ルーティング<h1>
  <FORM action="/" method = "POST">
    @csrf

    <br>
    <INPUT type = "text" id="text" Name = "text"></INPUT>
    <Button type = "submit" class = "btn btn-primary">決　定</button>
  </FORM>

<p>
  <?php
    if(isset($_POST['text'])){
      $post_text = $_POST['text'];
      echo $post_text."は存在しません";
    }
  ?>

</p>
@endsection
