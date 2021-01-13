<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth', 'has.permission']], function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::resource('departments', 'DepartmentController');
    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
    Route::resource('permissions', 'PermissionController');
});

Route::get('/home', 'HomeController@index')->name('home');
