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
        $user_id = Auth::id();
        $user = User::findOrFail($user_id);

        $book = Book::find($request->input('book_id'));

     
        $price = $book->price;
 
        // Check if the user has enough money
        if ($user->money < $price) {
            return redirect()->back()->with([
                'message_flash' => 'You dont have enough money',
                'alter' => 'error'
               ]);
        }

        $finalPrice = $user->money - $price;
      
       
        // Update the user's money
        $user->money = $finalPrice;                        ;
        $user->save();

       
            $new = new SoldBook();
            $new->user_id = $user->id;
            $new->book_id = $request->input('book_id');
            $new->save();
        
        $book->increment('soldNum');


        return redirect()->back()->with([
            'message_flash' => 'تم الشراء',
            'alter' => 'success'
           ]);
        
    }


    
     
}
