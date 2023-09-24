<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
use App\Models\User;
use App\Models\Storemodel;
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
Route::get('/test-foreignKey', function(){
   $user = User::findOrFail(1);
   $store = $user->store()->get();
   return dd($store);
});

Auth::routes();

 Route::group(['middleware' =>['auth']], function(){
    Route::resource('store',StoreController::class);
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    //view store list
     Route::get('/store',[StoreController::class, 'index'])->name('store.list');
    
     Route::post('/store',[StoreController::class,'store'])->name('store.save');
 });
