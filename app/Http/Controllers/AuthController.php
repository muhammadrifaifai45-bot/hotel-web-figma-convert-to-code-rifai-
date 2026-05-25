<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{

 

    public function showregister(){
        return view('register');
    }

    public function Regist(Request $request){
        $validated = $request->validate([
          'name'=> 'required|min:3|max:80',
          'email'=> 'required|email|unique:penggunas,email',
          'password'=>'required|min:6|confirmed'
        ]);

        $user = Pengguna::create([
            'name'=> $validated['name'],
            'email'=> $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);
        Auth::login($user);
        return redirect('/login')
        ->with('succes', 'Register berhasil akun anda Telah terdaftar silahkan login');
    }

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
