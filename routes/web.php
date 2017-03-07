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

Auth::routes();

Route::group(['prefix'=> 'adminc4ve'], function () {
    Route::get('/', [
        'as' => 'dashboard',
        'uses' => function () {
            return view('backend.index');
        }
    ]);

    Route::group(['prefix' => 'team'], function(){
        Route::get('/', [
            'as' => 'team.index',
            'uses' => 'TeamController@index'
        ]);

        Route::get('/{id}', [
            'as' => 'team.detail',
            'uses' => 'TeamController@memberById'
        ]);

        Route::get('member/add', [
            'as' => 'team.formadd',
            'uses' => 'TeamController@getAddMember'
        ]);

        Route::post('add', [
            'as' => 'team.add',
            'uses' => 'TeamController@postAddMember'
        ]);

    });
});


Route::get('/home', 'HomeController@index');
