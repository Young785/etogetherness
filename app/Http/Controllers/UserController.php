<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::get();
        return view('users.index', compact("users"));
    }
    
    public function profile()
    {
        $user = User::where("id", Auth::user()->id)->first();
        return view('users.profile', compact("user"));
    }
}
