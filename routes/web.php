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
    return view('index');
});

Route::get('/contacts', 'MainController@contacts')->name('contactsPage');

Route::get('/about', 'MainController@about')->name('aboutPage');

Route::get('/choice', 'MainController@choice')->name('choicePage');

Route::post('/choice/answer', 'MainController@answer');

Route::post('/contacts/send', 'MainController@sendMail')->name('mailSend'); // письма

Route::get('/reservation', 'MainController@reservationPage')->name('reservation'); // бронирование


Route::get('/room/{a}', 'RoomController@room')->name('rooms'); // страница номера


Route::get('/house/{a}', 'HouseController@house')->name('houses'); // страница домика