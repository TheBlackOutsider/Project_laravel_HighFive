<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticlesController;
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

Route::get('/', [PagesController::class,'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/contact-us', [PagesController::class, 'contact']);

Route::get('/about', [PagesController::class, 'about']);

Route::get('/articles', [ArticlesController::class, 'index']);

// Route::get('/articles/{{$detail->id}}', [ArticlesController::class, 'getDetails']);

Route::get('articles/{id}', [ArticlesController::class, 'show']);

// Route::get('articles/{id}', [ArticlesController::class, 'show']);





require __DIR__.'/auth.php';
