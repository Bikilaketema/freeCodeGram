<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

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

Route::get('/p/{post}', [PostController::class, 'show']);

Route::get('/p/create', [PostController::class, 'create']);

Route::post('/p', [PostController::class, 'store']);

Route::get('/profile/{id}/edit', [ProfileController::class, 'edit']);

Route::get('/profile/{id}', [ProfileController::class, 'show']);

Route::get('/dashboard', function () {
    $user = auth()->user(); 
    return view('dashboard', ['user' => $user]);
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
