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



/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

require __DIR__.'/auth.php';

Route::get('/contact', function () {
    return view('visitor.contact');
})->name('contact');





Route::get('/about_us', function () {
    return view('visitor.about');
})->name('about');


Route::get('admin/books', [BookController::class, 'index'])->name('admin.books.index');
Route::get('admin/books-table', [BookController::class, 'index_table'])->name('admin.books.index.table');

Route::get('admin/books/create', [BookController::class, 'create'])->name('admin.books.create');
Route::post('admin/books', [BookController::class, 'store'])->name('admin.books.store');
Route::get('admin/books/{book}', [BookController::class, 'show'])->name('admin.books.show');
Route::get('admin/books/{book}/edit', [BookController::class, 'edit'])->name('admin.books.edit');
Route::put('admin/books/{book}', [BookController::class, 'update'])->name('admin.books.update');
Route::delete('admin/books/{book}', [BookController::class, 'destroy'])->name('admin.books.destroy');
Route::get('admin/user-purchases', [UserController::class, 'showUserPurchases'])->name('admin.user.purchases');



//visitor Routs
Route::get('/', [VisitorBookController::class, 'index'])->name('home');
Route::get('/search', [VisitorBookController::class, 'search'])->name('book.search');
Route::get('/book', [VisitorBookController::class, 'getAllBooks'])->name('books');

Route::get('/{book}', [VisitorBookController::class, 'details'])->name('book_details.show');

Route::post('/book/store', [VisitorBookController::class, 'store'])->name('book.purchased.store');



