<?php

namespace App\Http\Middleware;

use Closure;
use App\User; 
use Auth;

class IsAdmin
{
    public function handle($request, Closure $next)
    {
         if (Auth::user() &&  Auth::user()->is_admin == 1) {
            return $next($request);
         }

        return redirect('/home');
    }
}
