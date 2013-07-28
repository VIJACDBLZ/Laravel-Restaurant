<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*Home Page Route*/
Route::get('/', function () {
    return View::make('welcome');
});
//Contact Page
Route::get('/contact', function () {
    return View::make('contact');
});

Route::get('/restaurant/{id}', 'RestaurantController@showRestaurant');



//USER ROUTES

Route::get('/login', function(){
    return View::make('login');
});

//ADMIN

Route::get('/admin', function(){
    return View::make('admin.admin');
});

//AJAX REQUESTS

//Restaurant Location POST

Route::post('/restaurants-location', function () {
    $Restaurant = Restaurant::all();
    return Response::json($Restaurant);
});

