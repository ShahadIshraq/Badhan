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


/*
|-------------------------------------------------------------------------- 
| Home page request
|--------------------------------------------------------------------------
|
| Directly sends welcome.blade.php to be shown.
|
*/
Route::get('/', function () {
    return view('welcome');
});

/*
|-------------------------------------------------------------------------- 
| Login page request
|--------------------------------------------------------------------------
|
| Directs to LoginController@create to check if logged in and then directs 
| to either home or the log in page.
|
*/

Route::get('/login', 'Auth\LoginController@create')->name('login');

/*
|-------------------------------------------------------------------------- 
| Sign up page
|--------------------------------------------------------------------------
|
| Directly sends signup.blade.php to be shown.
|
*/

Route::get('/signup', function () {
    return view('auth.signup');
});

/*
|-------------------------------------------------------------------------- 
| Login  request
|--------------------------------------------------------------------------
|
| Directs to LoginController@store to check and log in and then directs 
| to either home or the log in page.
|
*/
Route::post('/signin', 'Auth\LoginController@store');

/*
|-------------------------------------------------------------------------- 
| Sign up request
|--------------------------------------------------------------------------
|
| Directs to RegisterController@store to check if logged in and validate request
| then creates an register request 
| to either home or the log in page.
|
*/
Route::post('/register', 'Auth\RegisterController@store');


/*
|-------------------------------------------------------------------------- 
| Log out request
|--------------------------------------------------------------------------
|
| Directs to LoginController@logout to check if logged in and validate 
| request and redirects to home
|
*/
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/search', function() {
    return view('search');
});

Route::get('/events', function() {
    $title="Upcoming events.";
    $messages=array("General meeting on 13-7-2017" , "Club day on 14-8-2018");
    return view('message',compact('title','messages'));
});

Route::get('/contact', function(){
	$title="Contact us.";
    $messages=array("Phone Number : 12313212" , "Email : example@abc.com" , 'Address : TItumir Hall,BUET' );
    return view('message',compact('title','messages'));
});


Route::get('/approve/{user}', 'AdminController@approve');
Route::get('/remove/{user}', 'AdminController@remove');

Route::get('approvals', 'AdminController@approvals');

Route::post('/result', 'GeneralController@show');




Route::get('/{user}', 'ProfileController@dashboard');

Route::get('/{user}/edit', 'ProfileController@edit');


