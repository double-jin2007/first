<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
//首页
Route::group(['namespace'=>'Home','prefix'=>'Index'],function(){
        Route::any('show',[
            'uses'=>'IndexController@show',
        ]);
});

//登录注册
Route::group(['namespace'=>'User','prefix'=>'User'],function(){
    Route::any('regist',[
        'uses'=>'UserController@regist',
    ]);
    Route::any('getCode/{id}',[
        'uses'=>'UserController@getCode',
    ]);
    Route::any('checkuser',[
        'uses'=>'UserController@checkuser',
    ]);


});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
