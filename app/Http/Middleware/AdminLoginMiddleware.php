<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use App\User;


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
        if(Auth::check())
        {
            $user = Auth::User();
            if($user->quyen == 1)
            {
                return $next($request);
            }
            elseif ($user->quyen == 2)
            {
                return $next($request);
            }
            else
                return redirect('dangnhap');
        }
        else
            return redirect('dangnhap');
    }
}
