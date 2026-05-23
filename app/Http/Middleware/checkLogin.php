<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class checkLogin
{
    
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::check()){
            return redirect('/')
            ->with('login_required','Anda Harus Login terlebih dahulu Sebelum Mengakses Fitur ini');
        }
        return $next($request);
    }
}
