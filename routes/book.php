<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

//Route::get('/book','BookController@index');
Route::get('/book',[BookController::class , 'index']);
Route::middleware('auth:sanctum')->group(function () {
    Route::resource('book', BookController::class)
        ->parameter('book', 'id')->except(['index']);

});
