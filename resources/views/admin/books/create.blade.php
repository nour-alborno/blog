@extends('layouts.admin_home')
@section('title', 'Add New Book')
@section('content')
    <div class="container">
        <h3>Add New Book</h3>
        <br>
        <form action="{{ route('admin.books.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" name="title" class="form-control" id="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Author:</label>
                        <input type="text" name="author" class="form-control" id="author" required>
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Year:</label>
                        <input type="text" name="year" class="form-control" id="year" required>
                    </div>
                    <div class="mb-3">
                        <label for="details" class="form-label">Details:</label>
                        <textarea name="details" class="form-control" id="details" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price:</label>
                        <input type="number" name="price" class="form-control" id="price" required>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category:</label>
                        <select name="category_id" class="form-select" id="category" required>
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="book" class="form-label">Book:</label>
                        <input name="book" class="form-control form-control-lg" id="book" type="file">
                    </div>
                    <div class="mb-3">
                        <label for="book_img" class="form-label">Book Image:</label>
                        <input class="form-control form-control-lg" name="book_img" id="book_img" type="file">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-lg">Add this Book</button>
                    <a href="{{ route('admin.books.index') }}" class="btn btn-secondary btn-lg">Cancel</a>
                </div>
            </div>
            <br>
        </form>
    </div>
@endsection
