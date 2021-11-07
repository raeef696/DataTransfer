<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Datacontroller;


Route::get('/', function () {
    return view('welcome');
});

Route::get('app', function () {
    return view('layout.app');
});



Route::get('Dataviwe',[Datacontroller::class, 'index']);
Route::get('show',[Datacontroller::class, 'trans']);





