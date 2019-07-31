@extends('layout')

@section('content')

<h1>BBS</h1>


  @foreach($posts as $post)
  <div class='card mb-4'>
    <div class = "card-header bg-primary">{{$post->id}}:  {{$post->title}}</div>
    <div class ="card-body">{!! $post->body !!}</div>
    <div class = "card-footer bg-primary">投稿：{{$post->created_at}}　　更新:{{$post->updated_at}}</div>
  </div>
  @endforeach

  <div>
    <form class = "form-group" action = "/BBS" method = "POST">
      @csrf
      <label type = "text" >名前</label>
      <input type="text" id = 'text' name = "title" class="form-control">
      <label type = 'texterea'>本文</label>
      <textarea name = "body" class="form-control"></textarea>
      <button type="submit" class="btn btn-primary">書き込み</button>
      <button type="button" id = "clear" class="btn btn-primary">Clear</button>
    <form>
  </div>


  <script type = "text/javascript" src="js/main.js">
  console.log("test1");
  console.log("test2");
  </script>

@endsection
