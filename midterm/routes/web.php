<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
use App\Http\Controllers\FoodController;


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
    return view('welcome');
});


// midterm 
// Route::get('/form',[FoodController::class,'getIndex']);
// Route::post('/form',[FoodController::class,'getIndex']);
Route::get('/home',[FoodController::class,'getIndexHome']);

Route::get('/admin',[FoodController::class,'getAdminAdd']);
Route::post('/admin',[FoodController::class,'postAdminAdd'])->name('admin-add-form');

Route::get('/showadmin',[FoodController::class,'getIndexAdmin']);

Route::get('/detail/{id}',[FoodController::class,'Detail']);

// Route::get('/admin-edit-form/{id}',[PageOneController::class,'getAdminEdit']);
// Route::post('/admin-edit',[PageOneController::class,'postAdminEdit']);
// Route::post('/admin-delete/{id}',[PageOneController::class,'postAdminDelete']);