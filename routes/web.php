<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\EventController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\Auth\AuthController;
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

Route::get('/', function () {
    return view('Home.index');
});
Route::get('/details', function () {
    return view('Home.details');
});
Route::get('/about', function () {
    return view('Home.about');
});
Route::get('/organisators', function () {
    return view('Home.organisator');
});
Route::get('/admin', function () {
    return view('Admin.users.index');
})->middleware('auth');

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
]);
Route::get('my-events',[EventController::class,'myEvents'])->name('my.events');






