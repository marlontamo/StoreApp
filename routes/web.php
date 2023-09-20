<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
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
    return view('welcome');
});

Auth::routes();
Route::resource('store',StoreController::class);
Route::get('/home', [HomeController::class, 'index'])->name('home');
//view store list
Route::get('/store',[StoreController::class, 'index'])->name('store.list');
//view single store
Route::get('/store/{id}',[StoreController::class, 'show'])->name('store.view');
//create form
Route::get('/store/create',[StoreController::class, 'create'])->name('store.create');
//save store data
Route::post('/store',[StoreController::class,'store'])->name('store.save');
//store edit form
Route::get('/store/{id}',[StoreController::class, 'edit'])->name('store.edit');
//store update data to DB
Route::put('/store',[StoreController::class, 'update'])->name('store.update');
//delete single store
Route::delete('/store/{id}',[StoreController::class, 'destroy'])->name('store.destroy');
