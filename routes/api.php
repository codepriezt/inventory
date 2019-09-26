<?php
use Illuminate\Http\Request;


Route::group([

    'prefix'=>'auth'
   

], function () {

    Route::post('login', 'LoginController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('/create' , 'UserController@createNewUser')->name('post.signup');
    

});
