<?php

use App\Http\Controllers\prodController;

use Illuminate\Support\Facades\Route;

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

Route::view('login','login');
Route::post('login',[prodController::class,'login']);
Route::view('profile','profile');


Route::get('/logout',function(){
    if( session()->has('user')){
        session()->pull('user');
   }

   return redirect('login');
});

Route::view('add','add');
Route::post('add',[prodController::class,'add']);
Route::resource('products', ProdController::class);
Route::get('list',[prodController::class,'list']);
Route::get('delete/{id}',[prodController::class,'delete']);
Route::get('edit/{id}',[prodController::class,'edit']);
Route::post('update',[prodController::class,'update'])->name('update');
Route::get('view/{id}',[prodcontroller::class,'view']);
