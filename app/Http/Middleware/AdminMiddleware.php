<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        return $next($request);
    }
}
