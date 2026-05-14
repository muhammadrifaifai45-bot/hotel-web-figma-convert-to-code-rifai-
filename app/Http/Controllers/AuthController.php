<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Contracts\Service\Attribute\Required;

class AuthController extends Controller
{
    public function showlogin(){
        return view('login');
    }

    public function login(Request $request){
       $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
       ]);

       if(Auth::attempt($credentials)){
         $request->sesion()->regenerate();

         return redirect('/');
       }
       return back()->withErrors([
        'email' => 'Email/password salah'
    ]);

    } 
    
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function redirectGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    
    public function callbackGoogle()
    {
        $googleUser = Socialite::driver('google')->user();
    
        $user = User::where('email', $googleUser->email)->first();
    
        if (!$user) {
            $user = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'password' => bcrypt('google_login'),
            ]);
        }
    
        Auth::login($user);
    
        return redirect('/');
    }
}