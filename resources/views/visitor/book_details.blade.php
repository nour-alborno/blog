@extends('layouts.visitor_home')
@section('title', 'Book Details')
@section('content')
<br>
<br> <div class="container">
                        @if ($errors->any())
                        <div class="alert alert-custom alert-notice alert-light-danger fade show mb-5"
                                role="alert">
                                <div class="alert-text">  @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach</div>
                                <div class="alert-close">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">
                                            <i class="ki ki-close"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            @endif

							@if(session('message_flash'))
                            <div class="alert alert-custom alert-notice alert-light-{{session('alter')}} fade show mb-5"
                                role="alert">
                                <div class="alert-text">{{session('message_flash')}}</div>
                                <div class="alert-close">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">
                                            <i class="ki ki-close"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
							@endif

                            </div>

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
                        
            
                        <button type="submit">Buy</a>
                            
                    @else
                    <p>You must login to be able to buy</p>
                    @endif
                @else
                <a src="{{ asset('storage/' . $book->book) }}" alt="Book Image" class="img-fluid"></a>
                @endif    
            </div>
            <a href="{{ route('home') }}" class="btn btn-secondary mt-3">Back</a>
        </div>
    </div>
@endsection
