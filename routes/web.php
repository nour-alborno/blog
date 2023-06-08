<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Visitor\VisitorBookController;
use App\Http\Controllers\Admin\UserController;


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

// Route::get('visitor/index', function(){
//     return view('visitor.index');
// });




Route::get('admin/books', [BookController::class, 'index'])->name('admin.books.index');
Route::get('admin/books/create', [BookController::class, 'create'])->name('admin.books.create');
Route::post('admin/books', [BookController::class, 'store'])->name('admin.books.store');
Route::get('admin/books/{book}', [BookController::class, 'show'])->name('admin.books.show');
Route::get('admin/books/{book}/edit', [BookController::class, 'edit'])->name('admin.books.edit');
Route::put('admin/books/{book}', [BookController::class, 'update'])->name('admin.books.update');
Route::delete('admin/books/{book}', [BookController::class, 'destroy'])->name('admin.books.destroy');
Route::get('admin/user-purchases', [UserController::class, 'showUserPurchases'])->name('admin.user.purchases');




//visitor Routs
Route::get('/', [VisitorBookController::class, 'index'])->name('home');

Route::get('/book', [VisitorBookController::class, 'getAllBooks'])->name('books');

Route::get('/{book}', [VisitorBookController::class, 'details'])->name('book_details.show');

Route::post('/book/store', [VisitorBookController::class, 'store'])->name('book.purchased.store');

