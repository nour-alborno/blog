@extends('layouts.admin_home')

@section('title', 'User Purchases')

@section('content')
    <div class="container">
        <h3>User Purchases</h3>
            <a href="{{ route('admin.user.index') }}" class="btn btn-primary">All Users</a>

<br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="table-primary">User Name</th>
                    <th class="table-primary">Book Title</th>
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
    </div>
@endsection
