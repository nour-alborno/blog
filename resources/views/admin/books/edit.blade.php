6

@extends('layouts.visitor_home')
@section('title', 'Edit Book')
@section('content')
    <div class="container">
        <h3>Edit Book</h3>
        <br>
    <form action="{{ route('admin.books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" name="title" class="form-control" value="{{ $book->title }}" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="author" class="form-label">Author:</label>
                     <input type="text" name="author" class="form-control" value="{{ $book->author }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Year:</label>
                     <input type="text" name="year" class="form-control" value="{{ $book->year }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="details" class="form-label">Details:</label>
                        <textarea name="details" class="form-control" required>{{ $book->details }}</textarea>

                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price:</label>
                        <input type="number" name="price" class="form-control" value="{{ $book->price }}" required>

                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category:</label>
                        <select name="category_id" class="form-select" id="category" required>
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $book->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                     <div class="form-group">
            <label class="form-label">Book:</label>
            <input type="file" name="book" class="form-control-file">
        </div>
                   <div class="form-group">
                        <label class="form-label">Book Image:</label>
                        <input type="file" name="book_img" class="form-control-file">
                    </div>
                    <br>
           
                    <button type="submit" class="btn btn-primary btn-lg">Update</button>
                     <a href="{{ route('admin.books.index') }}" class="btn btn-secondary btn-lg">Cancel</a>
                </div>
            </div>
            <br>
        </form>
    </div>
@endsection
