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
    return redirect('login');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('/report', 'HomeController@index')->name('report');
    Route::get('/data-management', 'HomeController@index')->name('manage.data');
});

Route::group(['prefix' => 'settings', 'middleware' => ['auth']], function() {
    Route::get('/bank-category', 'HomeController@index')->name('category.index');
    Route::get('/banks', 'HomeController@index')->name('banks.index');
    Route::get('/roles', 'HomeController@index')->name('roles.index');
    Route::get('/users', ['uses' => 'UserController@index'])->name('users.index');
    Route::get('/users/data', ['uses' => 'UserController@data'])->name('users.data');
    Route::get('/users/{id}', ['uses' => 'UserController@detail'])->name('users.detail');
});
