@extends('layouts.admin_home')
@section('title', 'Edit Book')
@section('content')
    <h1>Edit Book</h1>

    <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Title:</label>
            <input type="text" name="title" class="form-control" value="{{ $book->title }}" required>
        </div>
        <div class="form-group">
            <label>Author:</label>
            <input type="text" name="author" class="form-control" value="{{ $book->author }}" required>
        </div>
        <div class="form-group">
            <label>Year:</label>
            <input type="text" name="year" class="form-control" value="{{ $book->year }}" required>
        </div>
        <div class="form-group">
            <label>Book:</label>
            <input type="file" name="book" class="form-control-file">
        </div>
        <div class="form-group">
            <label>Details:</label>
            <textarea name="details" class="form-control" required>{{ $book->details }}</textarea>
        </div>
        <div class="form-group">
            <label>Book Image:</label>
            <input type="file" name="book_img" class="form-control-file">
        </div>
        <div class="form-group">
            <label>Price:</label>
            <input type="number" name="price" class="form-control" value="{{ $book->price }}" required>
        </div>
        <div class="form-group">
            <label>Category:</label>
            <select name="category_id" class="form-control" required>
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $book->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection

