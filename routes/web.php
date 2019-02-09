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

Route::get('/', 'MainController@main')->name('main');

Route::get('/contacts', 'MainController@contacts')->name('contactsPage');

Route::get('/about', 'MainController@about')->name('aboutPage');

Route::get('/choice', 'MainController@choice')->name('choicePage');

Route::post('/choice/answer', 'MainController@answer');

Route::post('/contacts/send', 'MainController@sendMail')->name('mailSend'); // письма

Route::get('/reservation', 'MainController@reservationPage')->name('reservation'); // бронирование

Route::get('/house/{a}', 'HouseController@house')->name('houses'); // страница домика


// Admin
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/room/{id}', 'MainController@room')->name('room'); // страница номера

Route::group([
    'middleware' => 'auth',
    'prefix' => 'adm',

],
    function () {
        Route::get('/', [
            'as' => 'dashboard',
            'uses' => 'AdminController@dashboard',

        ]);

        Route::group([
            'as' => 'category::',
            'prefix' => 'category',

        ], function () {

            /**
             * CRUD Category
             */
            Route::get('/', [
                'as' => 'index',
                'uses' => 'CategoryController@index'
            ]);

            Route::post('/store', [
                'as' => 'store',
                'uses' => 'CategoryController@store'
            ]);

            Route::get('{id}/edit', [
                'as' => 'edit',
                'uses' => 'CategoryController@edit'
            ]);

            Route::post('{id}/update', [
                'as' => 'update',
                'uses' => 'CategoryController@update'
            ]);

            Route::delete('{id}/destroy', [
                'as' => 'destroy',
                'uses' => 'CategoryController@destroy'
            ]);
        });

        /**
         * CRUD Room
         */
        Route::group([
            'as' => 'room::',
            'prefix' => 'room',

        ], function () {

            /**
             * CRUD Category
             */
            Route::get('/', [
                'as' => 'index',
                'uses' => 'RoomController@index'
            ]);

            Route::get('create', [
                'as' => 'create',
                'uses' => 'RoomController@create'
            ]);

            Route::post('/store', [
                'as' => 'store',
                'uses' => 'RoomController@store'
            ]);

            Route::get('{id}/edit', [
                'as' => 'edit',
                'uses' => 'RoomController@edit'
            ]);

            Route::post('{id}/update', [
                'as' => 'update',
                'uses' => 'RoomController@update'
            ]);

            Route::delete('{id}/destroy', [
                'as' => 'destroy',
                'uses' => 'RoomController@destroy'
            ]);

            // Ajax destroy image
            Route::post('/destroy/img', [
                'as' => 'destroyImg',
                'uses' => 'RoomController@destroyImg'
            ]);

        });

        Route::group([
            'as' => 'contact-phone::',
            'prefix' => 'contact-phone',

        ], function () {

            /**
             * Contact phones
             */
            Route::post('/store', [
                'as' => 'store',
                'uses' => 'ContactPhoneController@store'
            ]);

            Route::delete('{id}/destroy', [
                'as' => 'destroy',
                'uses' => 'ContactPhoneController@destroy'
            ]);
        });

        Route::group([
            'as' => 'mail::',
            'prefix' => 'mail',

        ], function () {

            Route::get('/', [
                'as' => 'index',
                'uses' => 'MailController@index'
            ]);

            Route::get('/trashed', [
                'as' => 'trashed',
                'uses' => 'MailController@trashed'
            ]);

            Route::delete('{id}/destroy', [
                'as' => 'destroy',
                'uses' => 'MailController@destroy'
            ]);

            Route::delete('{id}/restore', [
                'as' => 'restore',
                'uses' => 'MailController@restore'
            ]);

            Route::delete('{id}/forceDelete', [
                'as' => 'forceDelete',
                'uses' => 'MailController@forceDelete'
            ]);

            Route::get('/lettersCount', [
                'as' => 'lettersCount',
                'uses' => 'MailController@lettersCount'
            ]);


        });


    }
);
