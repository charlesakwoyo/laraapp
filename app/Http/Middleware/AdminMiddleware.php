<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // If the user is not logged in, redirect to register
        if (!Auth::check()) {
            return redirect()->route('register')->with('error', 'Please register or log in first.');
        }

        // If logged in but not admin, redirect to home or dashboard
        if (Auth::user()->role !== 'admin') {
            return redirect()->route('home')->with('error', 'Access denied. Admins only.');
        }

        return $next($request);
    }
}
