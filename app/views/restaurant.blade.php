@extends('layout.master')
@section('content')
<div class="alert alert-error">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong> {{ $Restaurant }} </strong>
</div>

<div class="row-fluid">
    <div class="span3">
        <div class="well sidebar-nav course-nav affix">
            <ul class="nav nav-list">
                <li class="nav-header">Course</li>
                <li class="active"><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li class="nav-header">Sidebar</li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
            </ul>
        </div><!--/.well -->
    </div><!--/span-->
    <div class="span9">
        <div class="hero-unit">
            <h1>{{$Restaurant->name}}</h1><p>{{$Restaurant->address}}<br>{{$Restaurant->website}}<br>{{$Restaurant->mail}}</p>

            <p><a href="#" class="btn btn-primary btn-large">Button »</a></p>
        </div>
        <div class="row-fluid">
            <div class="span4">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn" href="#">View details »</a></p>
            </div><!--/span-->
            <div class="span4">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn" href="#">View details »</a></p>
            </div><!--/span-->
            <div class="span4">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn" href="#">View details »</a></p>
            </div><!--/span-->
        </div><!--/row-->
    </div><!--/span-->
</div>
@stop
