@extends('layout.master')
{{-- Nav bar Filters Added Here --}}
@section('nav')
<ul class="nav">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-globe icon-white"></i> Location<b
                class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="#">Anna Nagar</a></li>
            <li><a href="#">KK Nagar</a></li>
            <li><a href="#">Mylapore</a></li>
            <li><a href="#">Vadapalani</a></li>
            <li><a href="#">T-Nagar</a></li>
        </ul>
    </li>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-leaf icon-white"></i> Cuisine<b
                class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="#">Tamil</a></li>
            <li><a href="#">Hydrabadi</a></li>
            <li><a href="#">Punjabi</a></li>
            <li><a href="#">Chinese</a></li>
            <li><a href="#">Oceanian</a></li>
        </ul>
    </li>
</ul>
@stop
@section('map-view')
<div id="map-canvas" style=" height:700px"></div>
@stop


@section('content')

@stop

@section('script')
{{ HTML::script('https://maps.googleapis.com/maps/api/js?key=AIzaSyDQPZwB0hHX6_TJ0zcoGsLQyRCbBDxywoU&sensor=true')}}
{{ HTML::script('js/map.js') }}
@stop