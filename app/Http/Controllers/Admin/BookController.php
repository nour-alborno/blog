<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::simplePaginate(10);
        return view('admin.books.index', compact('books'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.books.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'year' => 'required|string',
            'book' => 'required|file|mimes:pdf,doc,docx',
            'details' => 'required|string',
            'book_img' => 'nullable|image',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('book')) {
            $bookFile = $request->file('book');
            $bookPath = $bookFile->store('books', 'public');
            $validatedData['book'] = $bookPath;
        }

        if ($request->hasFile('book_img')) {
            $image = $request->file('book_img');
            $imagePath = $image->store('book_images', 'public');
            $validatedData['book_img'] = $imagePath;
        }

        Book::create($validatedData);

        return redirect()->route('admin.books.index')->with('success', 'Book created successfully.');
    }

    public function update(Request $request, Book $book)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'year' => 'required|string',
            'book' => 'nullable|file|mimes:pdf,doc,docx',
            'details' => 'required|string',
            'book_img' => 'nullable|image',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('book')) {
            $bookFile = $request->file('book');
            $bookPath = $bookFile->store('books', 'public');
            $validatedData['book'] = $bookPath;

            // Delete old book file
            Storage::disk('public')->delete($book->book);
        }

        if ($request->hasFile('book_img')) {
            $image = $request->file('book_img');
            $imagePath = $image->store('book_images', 'public');
            $validatedData['book_img'] = $imagePath;
        }

        $book->update($validatedData);

        return redirect()->route('admin.books.index')->with('success', 'Book updated successfully.');
    }

    public function show(Book $book)
    {
        return view('admin.books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        $categories = Category::all();
        return view('admin.books.edit', compact('book', 'categories'));
    }

    public function destroy(Book $book)
    {
        Storage::disk('public')->delete([$book->book, $book->book_img]);

        $book->delete();

        return redirect()->route('admin.books.index')->with('success', 'Book deleted successfully.');
    }
}

// use App\Models\Book;
// use Illuminate\Http\Request;
// use Illuminate\Routing\Controller;
// use Illuminate\Support\Facades\Storage;
// use Illuminate\Http\File;
// use App\Models\Category;

// class BookController extends Controller
// {
//     public function index()
//     {
//         $books = Book::simplePaginate(10);
//         return view('admin.books.index', compact('books'));
//     }

//   public function create()
// {
//     $categories = Category::all();
//     return view('admin.books.create', compact('categories'));
// }

//     public function store(Request $request)
// {
//     $validatedData = $request->validate([
//         'title' => 'required|string',
//         'author' => 'required|string',
//         'year' => 'required|string',
//         'book' => 'required|file|mimes:pdf,doc,docx',
//         'details' => 'required|string',
//         'book_img' => 'nullable|image',
//         'price' => 'required|numeric',
//         'category_id' => 'required|exists:categories,id',
//     ]);

//     if ($request->hasFile('book')) {
//         $bookFile = $request->file('book');
//         $bookPath = $bookFile->store('books', 'public');
//         $validatedData['book'] = $bookPath;
//     }

//     if ($request->hasFile('book_img')) {
//         $image = $request->file('book_img');
//         $imagePath = $image->store('book_images', 'public');
//         $validatedData['book_img'] = $imagePath;
//     }

//     Book::create($validatedData);

//     return redirect()->route('admin.books.index')->with('success', 'Book created successfully.');
// }

// public function update(Request $request, Book $book)
// {
//     $validatedData = $request->validate([
//         'title' => 'required|string',
//         'author' => 'required|string',
//         'year' => 'required|string',
//         'book' => 'nullable|file|mimes:pdf,doc,docx',
//         'details' => 'required|string',
//         'book_img' => 'nullable|image',
//         'price' => 'required|numeric',
//         'category_id' => 'required|exists:categories,id',
//     ]);

//     if ($request->hasFile('book')) {
//         $bookFile = $request->file('book');
//         $bookPath = $bookFile->store('books', 'public');
//         $validatedData['book'] = $bookPath;

//         // Delete old book file
//         Storage::disk('public')->delete($book->book);
//     }

//     if ($request->hasFile('book_img')) {
//         $image = $request->file('book_img');
//         $imagePath = $image->store('book_images', 'public');
//         $validatedData['book_img'] = $imagePath;
//     }

//     $book->update($validatedData);

//     return redirect()->route('admin.books.index')->with('success', 'Book updated successfully.');
// }

//     public function show(Book $book)
//     {
//         return view('admin.books.show', compact('book'));
//     }

// public function edit(Book $book)
// {
//     $book->load('file', 'image');
//     $categories = Category::all();
//     return view('books.edit', compact('book', 'categories'));
// }
  

//     public function destroy(Book $book)
//     {
//         $book->delete();

//         return redirect()->route('admin.books.index')->with('success', 'Book deleted successfully.');
//     }
// }
