<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class pay
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
        if (!empty(auth()->user()->pck_start) && !empty(auth()->user()->pck_end))
        {
            return redirect()->to("/");
        }


        return $next($request);
    }
}
