<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if user is logged in and has role 'user'
        if (auth()->check() && auth()->user()->role === 'user') {
            return $next($request);
        }

        // If not logged in, redirect to login
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // If logged in but not a normal user (like admin)
        return redirect()->route('admin.dashboard')->with('error', 'Access denied.');
    }
}
