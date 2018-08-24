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
        if(!Auth::check()){
            return redirect('/dang-nhap-admin');
        }else{
            $user = Auth::user();
            if($user->role == 1){
                return $next($request);
            }else{
                return redirect('/dang-nhap-admin');
            }
        }
    }
}
