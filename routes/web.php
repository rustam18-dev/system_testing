<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TestTypeController;
use App\Http\Controllers\ThemeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



Route::resource('/lang', LangController::class);
Route::resource('/subject', SubjectController::class);
Route::resource('/group', GroupsController::class);
Route::resource('/theme', ThemeController::class);
Route::resource('/status', StatusController::class);
Route::resource('/testType', TestTypeController::class);

Auth::routes();

Route::group(['middleware' => 'role:web-developer'], function() {
    Route::get('/dashboard', function() {
        return 'Добро пожаловать, Веб-разработчик';
    });
});


