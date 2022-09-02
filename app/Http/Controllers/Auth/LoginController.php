<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()

    {

        return Socialite::driver('google')->redirect();

    }

    public function handleGoogleCallback()

    {

        try {

            $user = Socialite::driver('google')->user();

            $finduser = User::where('google_id', $user->id)->first();

            if($finduser){

                Auth::login($finduser);
                if(Auth::user()->user_type == "admin"){
                    return redirect('/admin');
                }elseif(Auth::user()->user_type == "user"){
                    return redirect('/users');

                }

            }else{

                $newUser = User::create([

                    'first_name' => $user->name,

                    'last_name' => $user->name,

                    'email' => $user->email,

                    'user_type' => "user",

                    'google_id'=> $user->id,
                    
                    'remember_token' => Str::random(60),
                    'password' => Hash::make('password'),

                ]);

                Auth::login($newUser);

                if(Auth::user()->user_type == "admin"){
                    return redirect('/admin');
                }elseif(Auth::user()->user_type == "user"){
                    return redirect('/users');

                }

            }

        } catch (Exception $e) {

            return redirect('/auth/google');

        }

    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
