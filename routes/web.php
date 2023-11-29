<?php

use Illuminate\Support\Facades\Route;


Route::get('/', \App\Http\Controllers\IndexController::class)->name('index');


/*Route::group(['namespace' =>  'App\Http\Controllers\User', 'prefix' => 'user'], function (){
    Route::get('/',App\Http\Controllers\User\UserController::class)->name('user');
    Route::get('/create' ,\App\Http\Controllers\User\CreateUserController::class)->name('create.user');
    Route::post('/', \App\Http\Controllers\User\StoreUserController::class)->name('store.user');

});*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
});
