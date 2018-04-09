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
Route::get('/reservation', 'MainController@reservationPage')->name('reservation');

Route::get('/room/standard', 'RoomController@standard')->name('roomsStandard');

Route::get('/room/lux', 'RoomController@lux')->name('roomsLux');

Route::get('/room/luxPlus', 'RoomController@luxPlus')->name('roomsLuxPlus');

Route::get('/room/mansard', 'RoomController@mansard')->name('roomsMansard');




Route::get('/house/1rooms/pink', 'HouseController@pink')->name('housePink');

Route::get('/house/1rooms/green', 'HouseController@green')->name('houseGreen');


Route::get('/house/2rooms/lilac', 'HouseController@lilac')->name('houseLilac');

Route::get('/house/2rooms/lime', 'HouseController@lime')->name('houseLime');


Route::get('/house/3rooms/fishing', 'HouseController@fishing')->name('houseFishing');

Route::get('/house/3rooms/coast', 'HouseController@coast')->name('houseCoast');
