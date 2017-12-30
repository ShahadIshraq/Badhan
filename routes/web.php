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
    //$where = "home";
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

/*
|-------------------------------------------------------------------------- 
| search page request
|--------------------------------------------------------------------------
|
| Shows search view
|
*/
Route::get('/search', function() {
    return view('search');
});


/*
|-------------------------------------------------------------------------- 
| Events page request
|--------------------------------------------------------------------------
|
| Directs to message view with the events as the message
|
*/
Route::get('/events', function() {
    $title="Upcoming events.";
    $messages=array("General meeting on 13-7-2017" , "Club day on 14-8-2018");
    return view('message',compact('title','messages'));
});

/*
|-------------------------------------------------------------------------- 
| Contact us page request
|--------------------------------------------------------------------------
|
| Directs to message view with the contact informations as the message
|
*/
Route::get('/contact', function(){
	$title="Contact us.";
    $messages=array("Phone Number : 12313212" , "Email : example@abc.com" , 'Address : TItumir Hall,BUET' );
    return view('message',compact('title','messages'));
});

/*
|-------------------------------------------------------------------------- 
| Approve request
|--------------------------------------------------------------------------
|
| Sets the confirmation of the user table entry to 1
|
*/
Route::get('/approve/{user}', 'AdminController@approve');

/*
|-------------------------------------------------------------------------- 
| Remove request
|--------------------------------------------------------------------------
|
| Delets the associated users table entry.
|
*/
Route::get('/remove/{user}', 'AdminController@remove');

/*
|-------------------------------------------------------------------------- 
| Approvals page request
|--------------------------------------------------------------------------
|
| Directs to the approvals function of the admin controller where after 
| authentication the pending approval requests are shown.
|
*/
Route::get('approvals', 'AdminController@approvals');


Route::post('/result', 'GeneralController@show');



/*
|-------------------------------------------------------------------------- 
| User profile request
|--------------------------------------------------------------------------
|
| Directs to the dashboard function of the ProfileController , where ,after
| authentication, the user profile credentials and donation stats are shown.
|
*/
Route::get('/{user}', 'ProfileController@dashboard');

/*
|-------------------------------------------------------------------------- 
| User profile edit page request
|--------------------------------------------------------------------------
|
| Directs to the edit function of the ProfileController , where ,after
| authentication, the user profile edit view is shown.
|
*/
Route::get('/{user}/edit', 'ProfileController@edit');

/*
|-------------------------------------------------------------------------- 
| User profile edited data saving request
|--------------------------------------------------------------------------
|
| Directs to the save function of the ProfileController , where ,after
| authentication, the edits are saved.
|
*/
Route::post('/{user_id}/save', 'ProfileController@save');


