<?php

use Illuminate\Support\Facades\Route;


Route::get('/4',[
    App\Http\Controllers\MasterlistController::class,
    'count'

]);

Route::get('/5',[
    App\Http\Controllers\MasterlistController::class,
    'savg'
    
]);

Route::get('6',[
    App\Http\Controllers\MasterlistController::class,
    'exists'

]);
