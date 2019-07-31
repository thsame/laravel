@extends('layout')

@section('content')

<h1 class = "">ルーティング<h1>
  <FORM action="/" method = "POST">
    @csrf

    <br>
    <INPUT type = "text" id="text" Name = "text">
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



  
  
<form method="POST"  name="form1" action="/">
  @csrf
  <input type="hidden" id = 'text' name='text' value='BBS'>
  <a href="/" onClick="document.form1.submit(); return false;">BBS</a>
</form>
<form method="POST"  name="form2" action="/">
    @csrf
  <input type="hidden" id = 'text2' name='text' value='taxi'>
  <a href="/" onClick="document.form2.submit(); return false;">Taxi</a>
</form>
<form method="POST"  name="form3" action="/">
  @csrf
  <input type="hidden" id = 'text3' name='text' value='address'>
  <a href="/" onClick="document.form3.submit(); return false;">Address</a>
</form>

@endsection
