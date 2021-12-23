<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialProviderController;

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
//Login with Github
Route::get('provider/{driver}',[SocialProviderController::class,'provider'])
    ->name('provider');
Route::get('provider/{driver}/callback',[SocialProviderController::class,'providerHandle']);

Route::get('auth/facebook', [SocialProviderController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [SocialProviderController::class, 'loginWithFacebook']);


Route::middleware(['auth:sanctum', 'verified'])
    ->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
