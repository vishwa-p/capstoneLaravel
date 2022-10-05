<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShoesController;
use App\Http\Controllers\AuthController;
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
    return view('/auth/login');
});

Route::get('/auth/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('/auth/login', [AuthController::class, 'loginForm'])->middleware('guest');
Route::post('/auth/login', [AuthController::class, 'login'])->middleware('guest');
Route::get('/auth/dashboard', [AuthController::class, 'dashboard'])->middleware('auth');

Route::get('/console/users/list', [UserController::class, 'list']);
Route::get('/console/users/add', [UserController::class, 'addForm']);
Route::post('/console/users/add', [UserController::class, 'add']);
Route::get('/console/users/edit/{user:id}', [UserController::class, 'editForm']);
Route::post('/console/users/edit/{user:id}', [UserController::class, 'edit']);
Route::get('/console/users/delete/{user:id}', [UserController::class, 'delete']);


Route::get('/auth/register', [UserController::class, 'registerForm']);
Route::post('/console/users/add', [UserController::class, 'add']);

Route::get('/shoes/list', [ShoesController::class, 'list']);
Route::get('/shoes/addform', [ShoesController::class, 'addForm']);
Route::post('/shoes/add', [ShoesController::class, 'add']);
Route::get('/shoes/editform/{shoes:id}', [ShoesController::class, 'editForm']);
Route::post('/shoes/edit/{shoes:id}', [ShoesController::class, 'edit']);
Route::get('/shoes/delete/{shoes:id}', [ShoesController::class, 'delete']);
Route::get('/shoes/image/{shoes:id}', [ShoesController::class, 'imageForm']);
Route::post('/shoes/image/{shoes:id}', [ShoesController::class, 'image']);
