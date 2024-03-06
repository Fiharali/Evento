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






Route::get('/forget-password', function () {
    return view('Auth.forgotPassword');
});

Route::get('login',[AuthController::class,'LoginPage'])->name('login.page')->middleware('guest');
Route::get('register',[AuthController::class,'RegisterPage'])->name('register.page');
Route::post('login',[AuthController::class,'login'])->name('login');
Route::post('register',[AuthController::class,'register'])->name('register');
Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

///

Route::resources([
    'categories' => CategoryController::class,
    'events' => EventController::class,
    'users' => UserController::class,
    'reservation' => ReservationController::class,
]);
Route::get('my-events',[EventController::class,'myEvents'])->name('my.events');






