<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
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
    public function search(Request $request)
    {
        // dd(request()->state);
        $users = User::where(['gender' => request()->gender])
        ->orWhereBetween('age', [request()->from_ages, request()->to_ages])
        // ->orWhere('age', 'LIKE', '%' . request()->from_ages . '%')
        // ->orWhere('seeking_age_to', 'LIKE', '%' . request()->to_ages . '%')
        ->orWhere('country', 'LIKE', '%' . request()->country . '%')
        ->orWhere('state', 'like', '%' . request()->state . '%')
        ->orWhere('city', 'like', '%' . request()->city . '%')
        // ->orWhere('city', 'LIKE', '%' . request()->city . '%')
        ->get();
        // dd($users);
        return view('users.search', compact("users"));
    }
}