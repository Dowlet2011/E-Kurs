<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LocaleMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has('locale') and in_array(session('locale'), ['tm', 'en'])) {
            app()->setLocale(session('locale'));
        } else {
            app()->setLocale(env('APP_LOCALE', 'en'));
        }
        
        return $next($request);
    }
}
