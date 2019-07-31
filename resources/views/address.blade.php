@extends('layout')

@section('content')

<h1>アドレス変換</h1>

<div>
    <form method="POST" action= "/addres" class = 'form-group'>
        @csrf
        <label type = "text">住所入力</label>
        <input type="text" id = 'ad' name = "ad" class="form-control">
        <button type="submit" class="btn btn-primary">位置取得</button>
        <button type="button" id = "clear" class="btn btn-primary">Clear</button>
    </form>
</div>

<script type = "text/javascript" src="js/address.js">
</script>

<div id="test">
    tttt
</div>

<script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=<?= config('app.api_key') ?>" async defer></script>
@endsection
