<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\SoldBook;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class VisitorBookController extends Controller
{
    public function index()
    {
        $booksNewest = Book::orderBy('created_at', 'DESC')->take(3)->get();

        $booksPurchesed = Book::orderBy('soldNum', 'DESC')->take(3)->get();

        return view('visitor.index', [
            'books' =>$booksNewest
        ]);
    }

    public function getAllBooks()
    {
        $books = Book::simplePaginate(10);
        return view('visitor.books', compact('books'));
    }


    public function details(Book $book)
    {
        return view('visitor.book_details', compact('book'));
    }


  
    
       public function store(Request $request){
        $user = Auth::user();
        $book = Book::find($request->input('book_id'));

     

        $price = $book->price;
 
        // Check if the user has enough money
        if ($user->money < $price) {
            return redirect()->back()->with([
                'message_flash' => 'الميزانية لا تسمح',
                'alter' => 'error'
               ]);
        }

        $finalPrice = $user->money - $price;
      
       


        // Update the user's money
        $user->money -= $price;
        $user->save();
        $pb =SoldBook::Where('user_id',$user->id)->where('book_id',$request->input('book_id'))->first();
        $pb->save();

        $book->increment('soldNum');


        return redirect()->back()->with('success', 'Book deleted successfully.');
        
    }


    
     
}
