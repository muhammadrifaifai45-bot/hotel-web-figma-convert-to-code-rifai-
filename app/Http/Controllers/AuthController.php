<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Pengguna;

class AuthController extends Controller
{
    public function showlogin()
    {
        return view('login');
    }


    public function login(Request $request)
    {
        $credentials = $request->validate([

            'email' => 'required|email',

            'password' => 'required'

        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/')
            ->with('success_login', 'Berhasil login!')
            ;
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


        $user = Pengguna::where(
            'email',
            $googleUser->email
        )->first();



        if (!$user) {
            $user = Pengguna::create([

                'name' => $googleUser->name,

                'email' => $googleUser->email,

                'google_id' => $googleUser->id,

                'avatar' => $googleUser->avatar,

                'password' => bcrypt('google_login'),

            ]);
        }

               Auth::login($user);

        return redirect('/');
    }
}
