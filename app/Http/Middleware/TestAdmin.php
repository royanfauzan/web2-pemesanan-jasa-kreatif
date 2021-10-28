<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TestAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!strcmp(auth()->user()->role,'admin')) {
            return $next($request);
        }
        return redirect('/dashboard')->with('aksesError','Halaman hanya dapat diakses admin');
    }
}
