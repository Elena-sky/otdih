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

Route::get('/room/standard', 'RoomController@standard')->name('roomsStandard'); // стандарт

Route::get('/room/lux', 'RoomController@lux')->name('roomsLux'); // люкс

Route::get('/room/luxPlus', 'RoomController@luxPlus')->name('roomsLuxPlus'); // люкс балкон

Route::get('/room/mansard', 'RoomController@mansard')->name('roomsMansard'); // мансарда




Route::get('/house/1rooms/pink', 'HouseController@pink')->name('housePink'); // 1к домик

Route::get('/house/1rooms/green', 'HouseController@green')->name('houseGreen'); //1к домик


Route::get('/house/2rooms/lilac', 'HouseController@lilac')->name('houseLilac'); //2к домик

Route::get('/house/2rooms/lime', 'HouseController@lime')->name('houseLime'); //2к домик


Route::get('/house/3rooms/fishing', 'HouseController@fishing')->name('houseFishing'); //3к домик

Route::get('/house/3rooms/coast', 'HouseController@coast')->name('houseCoast'); //3к домик
