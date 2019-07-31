@extends('layout')

@section('content')

<h1>taxi(予定)</h1>

<div id="map"></div>
<div>
    <p id = "address"></p>
</div>

<script type = "text/javascript" src="js/position.js">
</script>


<script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=<?= config('app.api_key') ?>&callback=get_position" async defer></script>
@endsection
