<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/11/2018
 * Time: 10:41 AM
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class AdminRestaurantLoginMiddleware
{
    public function handle($request, Closure $next)
    {
        if(!Auth::check()){
            return redirect('/dang-nhap-admin-restaurant');
        }else{
            $user = Auth::user();
            if($user->role == 2){
                return $next($request);
            }else{
                return redirect('/dang-nhap-admin-restaurant');
            }
        }
    }
}