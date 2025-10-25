<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Show all users
    public function index()
    {
        $users = User::all(); // Fetch all users
        return view('admin.users.index', compact('users'));
    }
}
