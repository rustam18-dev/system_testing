<?php

use App\Http\Controllers\LangController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ThemeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/subject', SubjectController::class);
Route::resource('/lang', LangController::class);
Route::resource('/theme', ThemeController::class);
