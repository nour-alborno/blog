@extends('layouts.admin_home')
@section('title', 'user_purchases')
@section('content')
<h1>hiiiiiiiiiiiiiii</h1>
<table>
    <thead>
        <tr>
            <th>User Name</th>
            <th>Book Title</th>
        </tr>
    </thead>
    <tbody>
        @foreach($userPurchases as $purchase)
            <tr>
                <td>{{ $purchase->name }}</td>
                <td>{{ $purchase->title }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
