<?php

use App\Http\Controllers\SitemapController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\User;
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

Route::get('/app/sitemap.xml', [SitemapController::class, 'generate'])->name('sitemap');
Route::post('/login', [UserController::class, 'authenticate']);
Route::delete("/destroy/{id}", [UserController::class, 'destroy'])->middleware(User::class);
Route::put("/update/{id}", [UserController::class, 'update'])->middleware(User::class);
Route::post('/store', [UserController::class, 'store'])->middleware(User::class);
Route::post('/store2', [UserController::class, 'store2'])->middleware(User::class);
Route::get('/add', [UserController::class, 'create'])->middleware(User::class);
Route::get('/add2', [UserController::class, 'create2'])->middleware(User::class);
Route::get('/users', [UserController::class, 'index']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get("/update/{id}", [UserController::class, 'edit'])->middleware(User::class);
