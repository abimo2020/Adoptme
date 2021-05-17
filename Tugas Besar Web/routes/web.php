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


// Route::get('/', function () {
//     return view('pages.user.home');
// });

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[UserController::class,'index'])->name('user.index');
Auth::routes();
Route::middleware(['auth'])->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/donasi-hewan',[UserController::class,'create'])->name('user.create');
    Route::post('/',[UserController::class,'storeCreate'])->name('user.storeCreate');
    Route::get('/adopsi-kucing',[UserController::class,'adopt'])->name('user.adopt');
    Route::get('/tes',[UserController::class,'tes']);
    Route::get('/detail/{item}',[UserController::class,'show'])->name('user.show');
    Route::patch('/adopt-{pet}',[UserController::class,'adopted'])->name('user.adopted');
    Route::middleware(['admin'])->group(function(){
        Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
        Route::get('/admin-dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
        Route::get('/admin-tambah-data',[AdminController::class,'create'])->name('admin.create');
        Route::post('/admin',[AdminController::class,'store'])->name('admin.store');
        Route::get('/admin-edit-{item}',[AdminController::class,'edit'])->name('admin.edit');
        Route::patch('/admin-update-{pet}',[AdminController::class,'update'])->name('admin.update');
        Route::delete('/admin-delete-{item}',[AdminController::class,'destroy'])->name('admin.destroy');
        Route::get('/admin-list-kucing',[AdminController::class,'listKucing'])->name('admin.kucing');
        Route::get('/admin-list-anjing',[AdminController::class,'listAnjing'])->name('admin.anjing');
    });
    Route::get('logout',function(){
        Auth::logout();
        redirect('/');
    });
});

