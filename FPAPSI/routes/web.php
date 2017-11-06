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

Route::get('/main', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/to', function () {
    return view('user.to');
});

Route::get('/regconfirm', function () {
    return view('user.konfirmasipembayaran');
});

Route::get('/', function () {
    return view('mainpage');
});

Route::get('/tanyacs', function () {
    return view('message.inbox');
});

Route::get('/mentor', function () {
    return view('native_apsi.homementor');
});

Route::get('/unggah', function () {
    return view('native_apsi.pages.unggah_materi');
});

Route::get('/lihat', function () {
    return view('native_apsi.pages.lihat_materi');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('message')->group(function()
{
	Route::get('/inbox','MessageController@showinbox')->name('inbox');
	Route::get('/newmessage','MessageController@shownewmessage')->name('newmessage');
	Route::post('/newmessage','MessageController@newmessage')->name('newmessage.submit');
	Route::get('/sent','MessageController@showsent')->name('sent');
	Route::get('/showmessage/{id}','MessageController@showmessage')->name('showmessage');
	Route::get('/deletemessage/{id}','MessageController@deletemessage')->name('deletemessage');
});
