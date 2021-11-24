<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\{
    LogoutController,
};

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::middleware(['auth'])->group(function() {

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::resource('/empresas', CompanyController::class);

    Route::resource('/salas', RoomController::class);

    Route::resource('/turmas', TeamController::class);

    Route::resource('/usuarios', UserController::class);

});
