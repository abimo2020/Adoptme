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

<<<<<<< HEAD

Route::get('/', function () {
    return view('pages.user.home');
});

// Route::get('/', function () {
//     return view('welcome');
// });

<<<<<<< Updated upstream
Route::get('/',[UserController::class,'index'])->name('user.index');
=======

=======
Route::get('/',[UserController::class,'index'])->name('user.index');
>>>>>>> master
>>>>>>> Stashed changes
Auth::routes();
Route::middleware(['auth'])->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/donasi-hewan',[UserController::class,'create'])->name('user.create');
    Route::post('/',[UserController::class,'storeCreate'])->name('user.storeCreate');
    Route::get('/adopsi-kucing',[UserController::class,'adopt'])->name('user.adopt');
    Route::get('/tes',[UserController::class,'tes']);
    Route::get('/detail/{item}',[UserController::class,'show'])->name('user.show');
    Route::middleware(['admin'])->group(function(){
        Route::get('admin',[AdminController::class,'index']);
    });
    Route::get('logout',function(){
        Auth::logout();
        redirect('/');
    });
});

