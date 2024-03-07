<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\EventController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\EventController::class,'index']);
Route::get('/details/{event}', [\App\Http\Controllers\EventController::class,'show'])->name('event.details');
Route::get('search',[\App\Http\Controllers\EventController::class,'search'])->name('search');


Route::get('/about', function () {
    return view('Home.about');
});
Route::get('/organisators', function () {
    return view('Home.organisator');
});







Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'LoginPage'])->name('login.page')->middleware('guest');
    Route::get('register', [AuthController::class, 'RegisterPage'])->name('register.page');
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('register', [AuthController::class, 'register'])->name('register');
    Route::get('/forget-password', function () {
        return view('Auth.forgotPassword');
    });
});



    Route::middleware('auth')->group(function () {
        Route::post('reservations',[ReservationController::class,'store'])->name('reservations.store');
        Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
    });


    Route::middleware(['auth','can:isAdmin'])->group(function () {
        Route::resource('categories', CategoryController::class);
        Route::resource('users', UserController::class);
        Route::get('reservations',[ReservationController::class,'index'])->name('reservations.index');
        Route::patch('events/{event}',[EventController::class,'update'])->name('events.update');

    });

    Route::middleware(['auth','can:isOrganisator'])->group(function () {
        Route::resource('events', EventController::class);
        Route::get('my-events',[EventController::class,'myEvents'])->name('my.events');
        Route::get('my-reservations',[ReservationController::class,'myReservation'])->name('my.reservations');
        Route::patch('reservations/{reservation}',[ReservationController::class,'update'])->name('reservations.update');

    });








