<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CheckRole
{
    protected $publicRoutes = [
        '/',
        'servicios',
        'osmosis',
        'productos',
        'catalogos',
    ];

    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Check if the current route is in the public routes
        if (in_array($request->path(), $this->publicRoutes)) {
            return $next($request);
        }

        if (!Auth::check()) {
            return redirect('/');
        }

        $user = Auth::user();
        Log::info('User Role: ' . $user->getRoleNames());

        foreach ($roles as $role) {
            if ($user->hasRole($role)) {
                return $next($request);
            }
        }

        if ($user->hasRole('admin_sistema')) {
            return redirect('/subir-catalogos');
        } elseif ($user->hasRole('admin')) {
            return redirect('/subir-catalogos');
        } elseif ($user->hasRole('usuario')) {
            return redirect('/');
        }

        return redirect('/login');
    }
}
