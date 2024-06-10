<?php

namespace App\Http\Middleware;

use App\Notifications\NouvelleCommandeNotification;
use Closure;
// use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Illuminate\Http\Response;



class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,string $role): Response
    {

    return $next($request);
    }
}
