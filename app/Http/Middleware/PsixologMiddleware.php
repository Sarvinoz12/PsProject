<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PsixologMiddleware
{

    public function handle(Request $request, Closure $next): Response
    {
        // Foydalanuvchi tizimga kirgan va role_id = 2 bo‘lsa ruxsat beramiz
        if (auth('psixolog')->check() && auth('psixolog')->user()->role_id == 2) {
            return $next($request);
        }

        // Aks holda login sahifasiga yoki xatolik bilan redirect
        abort(403, 'Sizga bu sahifa uchun ruxsat yo‘q.');
    }
}
