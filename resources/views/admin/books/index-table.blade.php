@extends('layouts.visitor_home')
@section('title', 'Books')
   <!-- CSS here -->
   <link rel="stylesheet" href="assets/css/bootstrap.css">
   <link rel="stylesheet" href="assets/css/main.css">
   
@section('content')
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
<a href="{{ route('admin.books.create') }}" class="btn btn-primary mb-3 btn-lg">Add Book</a>
<div class="float-right">
    <a href="{{ route('admin.books.index.table') }}" class="btn btn-primary">Books Table</a>
    <a href="{{ route('admin.user.purchases') }}" class="btn btn-primary">User Purchases</a>
</div>
@if($books->isEmpty())
    <div class="alert alert-info">No books found.</div>
@else
    <table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Author</th>
                <th>Publication Year</th>
                <th>Price ($)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>
                        <img src="{{ asset('storage/' . $book->book_img) }}" alt="Image not found" width="100">
                    </td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->year }}</td>
                    <td>{{ $book->price }}</td>
                    <td>
                        <a href="{{ route('admin.books.show', $book->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('admin.books.edit', $book->id) }}" class="btn btn-secondary">Edit</a>
                        <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $books->links() }}
@endif

   <!-- JS here -->
   <script src="assets/js/vendor/jquery.js"></script>
   <script src="assets/js/vendor/waypoints.js"></script>
   <script src="assets/js/bootstrap-bundle.js"></script>
   <script src="assets/js/meanmenu.js"></script>
   <script src="assets/js/swiper-bundle.js"></script>
   <script src="assets/js/slick.js"></script>
   <script src="assets/js/nouislider.js"></script>
   <script src="assets/js/magnific-popup.js"></script>
   <script src="assets/js/parallax.js"></script>
   <script src="assets/js/backtotop.js"></script>
   <script src="assets/js/nice-select.js"></script>
   <script src="assets/js/wow.min.js"></script>
   <script src="assets/js/isotope-pkgd.js"></script>
   <script src="assets/js/imagesloaded-pkgd.js"></script>
   <script src="assets/js/ajax-form.js"></script>
   <script src="assets/js/jquery.appear.js"></script>
   <script src="assets/js/jquery.odometer.min.js"></script>
   <script src="assets/js/main.js"></script>


@endsection
