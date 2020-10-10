<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LocaleWebAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            app()->setLocale(auth()->user()->locale?? config('app.locale'));
        }
        return $next($request);
    }
}
