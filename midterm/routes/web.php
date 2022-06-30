<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;

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
// crud new
Route::get('/test',[NewController::class,'getIndex']);

Route::get('/admin-new',[NewController::class,'getAdminAdd']);
Route::post('/admin-new',[NewController::class,'postAdminAdd'])->name('admin-add-form');

Route::get('/showad',[NewController::class,'getIndexAdmin']);

Route::get('/admin-edit-form/{id}',[NewController::class,'getAdminEdit']);
Route::post('/admin-edit',[NewController::class,'postAdminEdit']);
Route::post('/admin-delete/{id}',[NewController::class,'postAdminDelete']);