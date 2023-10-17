<?php

use App\Http\Controllers\ClubController;
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
Route::put('/api/clubs/{id}', [ClubController::class, 'update']);
Route::put('/api/clubs/{id}', [ClubController::class, 'destroy']);


Route::get('/club/list', [ClubController::class, 'listView']);
Route::get('/club/new', [ClubController::class, 'newView']);
Route::get('/club/edit/{id}', [ClubController::class, 'editView']);