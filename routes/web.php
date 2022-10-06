<?php

use Illuminate\Support\Facades\Route;
 


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::group(['prefix' =>'admin'], function() {
    
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/', 'HomeController@index')->name('admin');
    Route::get('/photos/delete/{id}', 'HomeController@deletePhoto')->name('photos.delete');

    Route::middleware(['auth'])->namespace('Admin')->group(function () {

        Route::resource('albums', 'AlbumController');
        Route::delete('/albums/destroy/multiple', 'AlbumController@deleteMulti')->name('albums.destroy-multiple');
        Route::post('/album/assign-photo', 'AlbumController@assignPhoto')->name('album.assignPhoto');
        Route::post('/album/delete-photo', 'AlbumController@deleteWithPhoto')->name('album.deleteWithPhoto');


    });
});


