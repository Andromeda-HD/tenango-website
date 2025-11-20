<?php

namespace App\Http\Middleware;

use Closure;

class AdminOnly
{
    public function handle($request, Closure $next)
    {
        if (!session()->has('admin_id')) {
            return redirect('/admin/login');
        }

        return $next($request);
    }
}

