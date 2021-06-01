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

Route::get('/',[UserController::class,'index'])->name('user.index');
Auth::routes();
Route::middleware(['auth'])->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/donasi',[UserController::class,'create'])->name('user.create');
    // Route::post('/',[UserController::class,'storeCreate'])->name('user.storeCr');
    // Route::get('/adopsi/hewan',[UserController::class,'adopt'])->name('user.adopt');
    Route::get('/adopsi/{item}',[UserController::class,'show'])->name('user.show');
    Route::patch('/adopsi/{pet}',[UserController::class,'adopted'])->name('user.adopted');
    Route::get('/testimonial',[UserController::class,'testi'])->name('user.testi');
    Route::post('/testimoni/create',[UserController::class,'storeTesti'])->name('user.storeTesti');
    Route::post('/donasi/create',[UserController::class,'storeCreate'])->name('user.storeCreate');
    Route::get('/daftar/anjing',[UserController::class,'listAnjing'])->name('user.listAnjing');
    Route::get('/daftar/kucing',[UserController::class,'listKucing'])->name('user.listKucing');
    Route::middleware(['admin'])->group(function(){
        Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
        Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
        Route::get('/admin/tambah-data',[AdminController::class,'create'])->name('admin.create');
        Route::post('/admin',[AdminController::class,'store'])->name('admin.store');
        Route::get('/admin/edit/{item}',[AdminController::class,'edit'])->name('admin.edit');
        Route::patch('/admin/update/{pet}',[AdminController::class,'update'])->name('admin.update');
        Route::delete('/admin/delete/{item}',[AdminController::class,'destroy'])->name('admin.destroy');
        Route::get('/admin/list/kucing',[AdminController::class,'listKucing'])->name('admin.kucing');
        Route::get('/admin/list/anjing',[AdminController::class,'listAnjing'])->name('admin.anjing');
        Route::get('/admin/testimoni',[AdminController::class,'testi'])->name('admin.testi');
        // Route::get('/admin-edit-testimoni-{testi}',[AdminController::class,'editTesti'])->name('admin.editTesti');
        // Route::patch('/admin-update-testimoni-{testi}',[AdminController::class,'updateTesti'])->name('admin.updateTesti');
        // Route::delete('/admin-delete-testimoni-{testi}',[AdminController::class,'destroyTesti'])->name('admin.destroyTesti');
        Route::patch('/admin/allow/{pet}',[AdminController::class,'allow'])->name('admin.allow');
        Route::patch('/admin/adopted/{pet}',[AdminController::class,'adopted'])->name('admin.adopted');
        Route::get('/admin/testimoni/edit/{testi}',[AdminController::class,'tst'])->name('editTesti');
        Route::patch('/admin/testimoni/update/all{testi}',[AdminController::class,'updateTesti'])->name('upTest');
        Route::patch('/admin/testimoni/update/{testi}',[AdminController::class,'tstUp'])->name('updateTesti');
        Route::delete('/admin/testimoni/delete/{testi}',[AdminController::class,'tstDel'])->name('deleteTesti');
    });
    Route::get('logout',function(){
        Auth::logout();
        redirect('/');
    });
});

