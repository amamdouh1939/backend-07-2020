<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LocaleApi
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
        $locale = $request->header('X-locale', config('app.locale'));

        if (!in_array($locale, ['en', 'ar'])) {
            $locale = config('app.locale');
        }

        app()->setLocale($locale);

        return $next($request);
    }
}
