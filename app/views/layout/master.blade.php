<!DOCTYPE html>
<html>
<head>
    <title>
        @section('title')
        Laravel-Restaurants
        @show
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS are placed here -->
    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/bootstrap-responsive.css') }}
    {{ HTML::style('css/style.css') }}
</head>

<body>
<!-- Navbar -->
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <a class="brand" href="#">Laravel-Restaurant</a>

            <!-- Everything you want hidden at 940px or less, place within here -->
            <div class="nav-collapse collapse">

                @yield('nav')

                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Members<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Log In</a></li>
                            <li><a href="#">Registration</a></li>
                        </ul>
                    </li>
                </ul>

            </div>

        </div>
    </div>
</div>

<!-- Container -->
<div id="map-view">
    <!-- Map View -->
    @yield('map-view')
</div
<div class="container">


    <!-- Content -->
    @yield('content')

</div>

<!-- Scripts are placed here -->

{{ HTML::script('js/jquery.js') }}
{{ HTML::script('js/bootstrap.min.js') }}
{{ HTML::script('js/script.js');}}
@yield('script')

</body>
</html>