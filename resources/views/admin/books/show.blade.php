@extends('layouts.admin_home')
@section('title', 'Books')
@section('content')
<br>
<br>
    <div class="row">
        <div class="col-md-6">
            <div>
                <strong>Book Image:</strong>
                @if($book->book_img)
                    <img src="{{ asset('storage/app/public/' . $book->book_img) }}" alt="Book Image" class="img-fluid">
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
                @if($book->book)
                    <a href="{{ asset('storage/app/public/' . $book->book) }}" target="_blank">Download</a>
                @else
                    <p>No book file available</p>
                @endif
            </div>
            <a href="{{ route('books.index') }}" class="btn btn-secondary mt-3">Back</a>
        </div>
    </div>
@endsection
