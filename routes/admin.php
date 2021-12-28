<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'admin'])->group(function (){
   Route::get('/user', function (){
       dd('pass');
   });
});
