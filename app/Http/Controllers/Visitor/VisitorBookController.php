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
            'books' =>$booksNewest,
            'mostBought' => $booksPurchesed,
        ]);
    }

    public function getAllBooks()
    {
        $books = Book::simplePaginate(1);
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
                'message_flash' => 'Out of your budget',
                'alter' => 'fail'
            ]);
        }

        $finalPrice = $user->money - $price;
      
       
        // Update the user's money
        $user->money = $finalPrice;                      
        $user->save();

       
            $new = new SoldBook();
            $new->user_id = $user->id;
            $new->book_id = $request->input('book_id');
            $new->save();
        
        $book->increment('soldNum');


        return redirect()->back()->with([
            'message_flash' => 'Bought successfully',
            'alter' => 'success'
        ]);
        
    }


    public function search(Request $request){

        if($request->search){
            $searchBook=Book::where('title','LIKE','%'.$request->search.'%')->latest()->paginate(5);
            return  view('visitor.search', [
                'books' => $searchBook,
            ]);
            
        } else{
  
            return redirect()->back();
           
        }

    }


    
     
}
