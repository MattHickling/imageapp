<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\Debugbar\Facades\Debugbar;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;

use App\Http\Controllers\FallbackController;
use PHPUnit\Framework\MockObject\Rule\InvokedAtLeastOnce;

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



Route::prefix('blog')->group(function (){  
    Route::post('/', [PostsController::class, 'store'])->name('blog.store');
    Route::get('/create', [PostsController::class, 'create'])->name('blog.create'); 
    Route::get('/', [PostsController::class, 'index'])->name('blog.index');
    Route::get('/{id}', [PostsController::class, 'show'])->name('blog.show');
    Route::get('/edit/{id}', [PostsController::class, 'edit'])->name('blog.edit');
    Route::post('/update/{id}', [PostsController::class, 'update'])->name('blog.update');
    Route::delete('/destroy/{id}', [PostsController::class, 'destroy'])->name('blog.destroy');
});

// Route::resource('/blog', PostsController::class);

// Invoke
Route::get('/', HomeController::class);

// Route::get('/', [HomeController::class, 'index']);

// FALLBACK
// Route::fallback(FallbackController::class);
