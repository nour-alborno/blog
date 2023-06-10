<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index()
    {
        $users = User::simplePaginate(20);
        return view('admin.user_purchases_table', compact('users'));
    }
        public function showUserPurchases()
{
    $userPurchases = DB::table('users')
        ->join('soldbooks', 'users.id', '=', 'soldbooks.user_id')
        ->join('books', 'soldbooks.book_id', '=', 'books.id')
        ->select('users.name', 'books.title')
        ->get();

    return view('admin.user_purchases',compact('userPurchases') );
}
}
