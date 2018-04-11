<?php

    Route::get('/', function () {
        return view('welcome');
    });


    Route::get('posts', 'PostController@index');
    Route::get('post/{id}', 'PostController@show');

    Route::resource ('users', 'UserController');
    Route::resource ('roles', 'RolesController');
    Route::resource ('profiles', 'ProfilesController');



    Route::get ('user_listing', 'UserController@index')->name('user_listing');
    Route::get ('profile_listing', 'ProfilesController@index')->name('profile_listing');


    Route::get ('message/create', 'MessageController@create')->name('message_create');
    Route::post('message/save', 'MessageController@save')->name('message_save');
    Route::get('message', 'MessageController@index')->name('message_list');
    Route::get('message/show/{id}', 'MessageController@show')->name('message_show');
    Route::get('message/{id}/edit', 'MessageController@edit')->name('message_edit');
    Route::post('message/update', 'MessageController@update')->name('message_update');
    Route::get('message/delete/{id}', 'MessageController@delete')->name('message_delete');

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
