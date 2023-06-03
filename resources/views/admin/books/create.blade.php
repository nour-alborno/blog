@extends('layouts.admin_home')
@section('title', 'Add New Book')
@section('content')
    <h1>Add Book</h1>

    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Title:</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Author:</label>
            <input type="text" name="author" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Year:</label>
            <input type="text" name="year" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Book:</label>
            <input type="file" name="book" class="form-control-file" required>
        </div>
        <div class="form-group">
            <label>Details:</label>
            <textarea name="details" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>Book Image:</label>
            <input type="file" name="book_img" class="form-control-file">
        </div>
        <div class="form-group">
            <label>Price:</label>
            <input type="number" name="price" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Category:</label>
            <select name="category_id" class="form-control" required>
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
