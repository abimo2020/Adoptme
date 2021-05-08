<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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
    return view('pages.user.home');
});

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();
Route::middleware(['auth'])->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/donasi-kucing',[UserController::class,'create'])->name('user.create');
    Route::post('/',[UserController::class,'store'])->name('user.store');
    Route::middleware(['admin'])->group(function(){
        Route::get('admin',[AdminController::class,'index']);
    });
    Route::get('logout',function(){
        Auth::logout();
        redirect('/');
    });
});


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('catty', CattyController::class);
Route::resource('doggy', DoggyController::class);

