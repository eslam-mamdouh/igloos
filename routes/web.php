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


Route::get('/', 'userController@get_all_users');
// Route::get('/', function () {
//     return view('homePage');
// });
Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/space', function () {
    return view('working_space');
});
Route::get('/profile/{id}','userController@userProfile');
Route::post('/profile/update/{id}','userController@profileUpdate');

