<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // return $next($request);
        if (
            auth()->check() &&
            auth()->user()->peran &&
            auth()->user()->peran->nama_peran === $role
        ) {
            return $next($request);
        }

        abort(403, 'Akses ditolak');
    }
}
