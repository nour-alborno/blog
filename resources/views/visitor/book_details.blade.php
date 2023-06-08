@extends('layouts.visitor_home')
@section('title', 'Book Details')
@section('content')

                      				
@if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if(session('fail'))    
<div class="alert alert-danger">{{ session('fail') }}</div>    
    @endif

    <div class="row">
        <div class="col-md-6">
            <div>
                <strong>Book Image:</strong>
                @if($book->book_img)
                    <img src="{{ asset('storage/' . $book->book_img) }}" alt="Book Image" class="img-fluid">
                @else
                    <p>No image available</p>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <h1>{{ $book->title }}</h1>
            <p><strong>Author:</strong> {{ $book->author }}</p>
            <p><strong>Year:</strong> {{ $book->year }}</p>
            <p><strong>Details:</strong> {{ $book->details }}</p>
            <p><strong>Price:</strong> {{ $book->price }}</p>
            <div>
                <strong>Book File:</strong>
                @if(!App\Models\SoldBook::where('user_id', Auth::id())->where('book_id',$book->id)->first())
                    @if(Auth::User())
                    <form action="{{route('book.purchased.store')}}" method="post" enctype="multipart/form-data" >
                        @csrf  
                        
                        <input type="hidden" name="book_id" value="{{ $book->id }}">
                        
            
                        <button type="submit" class="btn btn-primary" href="{{ asset('storage/' . $book->book) }}" target="_blank">Buy</button>
                            
                    @else
                    <p>You must login to be able to buy</p>
                    @endif
                @else
                <a href="{{ asset('storage/' . $book->book) }}" alt="Pdf Book" class="img-fluid">The Book PDF</a>
                @endif    
            </div>
            <a href="{{ route('home') }}" class="btn btn-secondary mt-3">Back</a>
        </div>
    </div>
@endsection
