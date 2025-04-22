<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $role)
    {
        $user = Auth::user();

        if (!$user) {
            abort(403, 'Avval tizimga kiring.');
        }

        $roleIdMap = [
            'admin' => 1,
            'Psixolog' => 2,
            'user' => 3,
        ];

        if (!isset($roleIdMap[$role]) || $user->role_id != $roleIdMap[$role]) {
            abort(403, 'Sizda bu sahifaga kirish huquqi yo‘q.');
        }

        return $next($request);
    }
}
