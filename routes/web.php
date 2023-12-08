<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
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
    return view('posts');
})->name('home');
Route::get('/login', [AuthManager::class, 'login'])->name(name:'login');
Route::post('/login', [AuthManager::class, 'loginpost'])->name(name:'login.post');
Route::get('/registration', [AuthManager::class, 'registration'])->name(name:'registration');
Route::post('/registration', [AuthManager::class, 'registrationpost'])->name(name:'registration.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name(name:'logout');