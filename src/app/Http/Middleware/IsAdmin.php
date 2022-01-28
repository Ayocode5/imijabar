<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
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
        if($request->user()) {
            if($request->user()?->hasRole(['admin', 'editor', 'seller'])) {
                return $next($request);
            };

            return redirect('/');
        }

        return $next($request);
    }
}
