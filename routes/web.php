<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\Debugbar\Facades\Debugbar;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;

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

// GET
Route::get('/blog', [PostsController::class, 'index']);
Route::get('/blog/{id}', [PostsController::class, 'show']);


//POST
Route::get('/blog/create', [PostsController::class, 'create']);
Route::post('/blog/1', [PostsController::class, 'store']);

// PUT or PATCH
Route::get('/blog/edit/1', [PostsController::class, 'edit']);
Route::post('/blog/1', [PostsController::class, 'update']);

//DELETE
Route::delete('/blog/1', [PostsController::class, 'destroy']);





// Route::resource('/blog', PostsController::class);
// Route::get('/', [HomeController::class, 'index']);
Route::get('/', HomeController::class);
