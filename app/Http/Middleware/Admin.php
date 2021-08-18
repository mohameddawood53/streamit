<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class Admin
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

        if (!in_array(auth()->user()->role_id , [User::IS_ADMIN, User::IS_EDITOR]))
        {
            return redirect()->to("/");

        }
//        if (!auth()->user()->isAdmin)
//        {
//            return redirect()->to("/");
//        }
        return $next($request);
    }
}
