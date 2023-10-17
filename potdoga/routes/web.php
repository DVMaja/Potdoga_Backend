<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/api/clubs', [ClubController::class, 'index']);
Route::get('/api/clubs/{id}', [ClubController::class, 'show']);

Route::post('/api/clubs', [ClubController::class, 'store']);

Route::get('/api/users', [UserController::class,'index']);

//ciew útvonalak következnek
Route::get('/task/list', [ClubController::class, 'listView']);

Route::get('/task/new', [ClubController::class, 'newView']);
Route::get('/task/edit/{id}', [ClubController::class, 'editView']);

Route::get('/api/users/', [UserController::class, 'index']);
Route::get('/api/users/{{$user->id}}', [UserController::class, 'show']);
Route::get('/user/list', [UserController::class, 'listView']);
