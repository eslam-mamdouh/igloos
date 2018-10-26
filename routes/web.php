<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



 Route::get('/', function () {
     return view('homePage');
 });
Route::get('/logina', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});

Route::get('/reg', function () {
    return view('auth.register');
});

Route::post('/register','/registerController@register');
Route::post('/dosignup','userController@signup');
Route::post('/dologin','userController@login');

Route::get('/space', function () {
    return view('working_space');
});
Route::get('/profile/{id}','userController@userProfile');
Route::post('/profile/update/{id}','userController@profileUpdate');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/verify/{token}','verifyController@verify')->name('verify');
