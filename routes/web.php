<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BookController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('layout/admin_home', function(){
    return view('layouts.admin_home');
});
Route::prefix('admin')->group(function () {
    Route::get('books', [BookController::class, 'index'])->name('admin.books.index');
    Route::get('books/create', [BookController::class, 'create'])->name('admin.books.create');
    Route::post('books', [BookController::class, 'store'])->name('admin.books.store');
    Route::get('books/{book}', [BookController::class, 'show'])->name('admin.books.show');
    Route::get('books/{book}/edit', [BookController::class, 'edit'])->name('admin.books.edit');
    Route::patch('books/{book}', [BookController::class, 'update'])->name('admin.books.update');
    Route::delete('books/{book}', [BookController::class, 'destroy'])->name('admin.books.destroy');
    Route::get('books/{book}/delete', [BookController::class, 'delete'])->name('admin.books.delete');
    Route::post('books/sell', [BookController::class, 'sellBook'])->name('admin.books.sell');
});


Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');
