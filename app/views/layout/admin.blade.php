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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-cog icon-large icon-white"></i> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Log Out</a></li>
                        </ul>
                    </li>
                </ul>

            </div>

        </div>
    </div>
</div>
<!-- Container -->






<!--Profile Form-->
<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
            ×</button>
        <h3>
            Profile</h3>
    </div>
    <div class="modal-body">
        <form class="form-horizontal">
            <legend>Contact Info</legend>
            <div class="control-group">
                <label class="control-label" for="txtContactName">
                    Name</label>
                <div class="controls">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="span4" id="txtContactName" type="text">
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="txtPhone">
                    Phone</label>
                <div class="controls">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-comment"></i></span>
                        <input class="span4" id="txtPhone" type="text">
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="txtEmail">
                    E-mail</label>
                <div class="controls">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-envelope"></i></span>
                        <input class="span4" id="txtEmail" type="text">
                    </div>
                </div>
            </div>
            <legend>Security Info</legend>
            <div class="control-group">
                <label class="control-label" for="txtLoginID">
                    Login ID</label>
                <div class="controls">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="span4" id="txtLoginID" type="text" value="admin" disabled>
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="txtPassword">
                    Password
                </label>
                <div class="controls">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-lock"></i></span>
                        <input class="span4" id="txtPassword" type="password">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a> <a href="#"
                                                                                     class="btn" data-dismiss="modal">Cancel</a>
    </div>
</div>
<!--Container-->
<div class="container-fluid">
    <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a href="#basic">Basic</a></li>
        <li><a href="#validation">Validation</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="basic">
            <form class="form-horizontal">
                <div class="control-group">
                    <label class="control-label" for="inputName">
                        Name</label>
                    <div class="controls">
                        <input type="text" id="inputName">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputBirthdate">
                        Birthdate</label>
                    <div class="controls">
                        <input type="text" id="inputBirthdate" class="datepicker" data-date-format="mm/dd/yyyy">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputAddress">
                        Address</label>
                    <div class="controls">
                        <textarea rows="3"></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputEmail">
                        Country</label>
                    <div class="controls">
                        <select>
                            <option>Country 1</option>
                            <option>Country 2</option>
                            <option>Country 3</option>
                            <option>Country 4</option>
                            <option>Country 5</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputAbout">
                        About Me</label>
                    <div class="controls">
                        <textarea class="textarea" placeholder="Enter text ..." style="width: 620px; height: 150px"></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-primary">
                            Submit</button>&nbsp;
                        <button type="submit" class="btn">
                            Reset</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="tab-pane" id="validation">
            <form class="form-horizontal">
                <div class="control-group warning">
                    <label class="control-label" for="inputWarning">
                        Input with warning</label>
                    <div class="controls">
                        <input type="text" id="inputWarning">
                        <span class="help-inline">Something may have gone wrong</span>
                    </div>
                </div>
                <div class="control-group error">
                    <label class="control-label" for="inputError">
                        Input with error</label>
                    <div class="controls">
                        <input type="text" id="inputError">
                        <span class="help-inline">Please correct the error</span>
                    </div>
                </div>
                <div class="control-group success">
                    <label class="control-label" for="inputSuccess">
                        Input with success</label>
                    <div class="controls">
                        <input type="text" id="inputSuccess">
                        <span class="help-inline">Woohoo!</span>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-primary">
                            Submit</button>&nbsp;
                        <button type="submit" class="btn">
                            Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Scripts are placed here -->

{{ HTML::script('js/jquery.js') }}
{{ HTML::script('js/bootstrap.js') }}
{{ HTML::script('js/script.js');}}
{{ HTML::script('js/admin.js');}}


</body>
</html>
