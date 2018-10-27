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
 })->middleware('auth');

Route::get('/logina', function () {
    return view('login');
})->name("logina");

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/logout', 'userController@logout');

Route::get('/admin/users', 'adminUsersController@getUsers')->middleware('auth');
Route::get('/admin/user/{id}/delete', 'adminUsersController@delete')->middleware('auth');

Route::get('/admin/spaces', 'adminSpacesController@getSpaces')->middleware('auth');
Route::get('/admin/reviews', 'adminSpacesController@getReviews')->middleware('auth');
Route::post('/admin/spaces/add', 'adminSpacesController@addSpace')->middleware('auth');
Route::post('/admin/users/addUser', 'adminUsersController@addUser')->middleware('auth');
Route::get('/admin/space/{id}/delete', 'adminSpacesController@delete')->middleware('auth');
Route::get('/admin/review/{id}/deleteReview', 'adminUsersController@deleteReview')->middleware('auth');

Route::get('/mohga', function () {
    $reviews = App\review::all();
    return view('mohga' , ['reviews'=>$reviews]);
});

Route::get('/reg', function () {
    return view('auth.register');
});

Route::post('/register','/registerController@register');
Route::post('/dosignup','userController@signup');
Route::post('/dologin','userController@login');

Route::get('/space','userController@display_reviews_workspace', function () {
    return view('working_space');
});
Route::post('/review','userController@review');

Route::get('/profile/{id}','userController@userProfile');
Route::post('/profile/update/{id}','userController@profileUpdate');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/verify/{token}','verifyController@verify')->name('verify');
