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
    
    public function profile()
    {
        $user = User::where("id", Auth::user()->id)->first();
        return view('users.profile', compact("user"));
    }
    public function accountSettings()
    {
        $user = User::where("id", Auth::user()->id)->first();
        return view('users.edit_profile', compact("user"));
    }
    public function advSearch()
    {
        // $user = User::where("id", Auth::user()->id)->first();
        return view('users.advance_search');
    }
    public function matches()
    {
        $users = User::where(['gender' => request()->gender])
        ->orWhereBetween('age', [request()->from_ages, request()->to_ages])
        ->orWhere('country', 'LIKE', '%' . request()->country . '%')
        ->orWhere('state', 'like', '%' . request()->state . '%')
        ->orWhere('city', 'like', '%' . request()->city . '%')
        ->get();
        return view('users.matches', compact("users"));
    }
    public function activities()
    {
        return view('users.activities');
    }
    public function packages()
    {
        return view('users.packages');
    }
}