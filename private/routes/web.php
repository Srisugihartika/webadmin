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
    return view('welcome');
});
// // Route::get('/', function () {
// //     return view('dashboard');
// // });

// Route::get('home', function () {
//     return view('home');
// });
// Route::get('buku', function () {
//     return view('layouts.ta');
// });

// // hanya untuk tamu yg belum auth
// Route::get('/login', 'LoginController@getLogin')->middleware('guest');
// Route::post('/login', 'LoginController@Login');
// Route::get('/logout', 'LoginController@logout');;

// Route::get('/admin', function() {
//   return view('login');
// })->name('admin');

// Route::get('admin','LoginController@show');

// Route::post('admin', ['as' => 'admin', 'uses' => 'LoginController@login']);

//  // Route::post('/home', 'AdminController@show')->name('admin');
// // Route::get('/admin','LoginController@show');
// // Route::get('/showAdmin', 'AdminController@showAkun');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::view('/', 'auth.login');
// Auth::routes();

// Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');

// Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');

// Route::post('/login/admin', 'Auth\LoginController@adminLogin');
// Route::post('/register/admin', 'Auth\RegisterController@createAdmin');

// Route::view('/home', 'home')->middleware('auth');
// Route::view('/admin', 'admin');
