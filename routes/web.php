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

// Global route
Route::get('/', function () {
    return view('main');
});
Route::get('/signin', function () {
    return view('signin');
})->name('login');
Route::post('/signin', 'UsersController@signin');
Route::get('/signup', function () {
    return view('signup');
});
Route::post('/signup', 'UsersController@signup');
Route::get('/signout', 'UsersController@signout');
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', 'ContactController@addContact');


// Auth'd route
Route::middleware('auth')->group(function () {
    Route::get('/profile', function () {
        return view('user/profile');
    });
    Route::post('/profile', 'UsersController@updateProfile');
    Route::post('/changepass','UsersController@resetPass');
});

// Admin route
Route::prefix('admin')->group(function () {
    Route::middleware('auth:admin')->group(function () {
        Route::get('/', function() {
            return view('admin/dashboard');
        });
        Route::get('/messages','ContactController@index');
        Route::get('/messages/delete/{id}','ContactController@delete');
    });
    Route::get('/signin', function () {
        return view('admin/signin');
    })->name('adminlogin');
    Route::post('/signin', 'AdminController@signin');
    Route::get('/signout', 'AdminController@signout');
});