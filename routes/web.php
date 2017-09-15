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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/admin/room/new', 'RoomController@newProduct');
Route::get('/admin/room/updateRoom/{id}', 'RoomController@updateRoom');
Route::get('/admin/room', 'RoomController@index');
Route::get('/admin/room/destroy/{id}', 'RoomController@destroy');
Route::post('/admin/room/save', 'RoomController@add');
Route::get('/', 'MainController@index');

Route::group(['prefix' => 'admin','namespace' => 'Admin'],function ($router)
{
    $router->get('login', 'LoginController@showLoginForm')->name('admin.login');
    $router->post('login', 'LoginController@login');
    $router->post('logout', 'LoginController@logout');

    $router->get('dash', 'DashboardController@index');
});

