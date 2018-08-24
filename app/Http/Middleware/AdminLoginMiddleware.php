<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        if(Auth::check()){
//            $user = Auth::user();
//            if($user->role == 1)
                return $next($request);
//////            elseif ($user->role == 0)
//////                return redirect('/foody/trang-chu');
//            else
//                return redirect('/dang-nhap-admin');
//        }else{
//            return redirect('/dang-nhap-admin');
//        }

    }
}
