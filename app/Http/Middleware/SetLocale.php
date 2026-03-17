<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->route('locale');
        $supportedLocales = ['tr', 'en' , 'ru' , 'ar'];

        if ($locale && in_array($locale, $supportedLocales)) {
            app()->setLocale($locale);
            return $next($request);
        }

        if ($request->path() == '/') {
            return redirect()->to('/tr');
        }

        app()->setLocale('tr');
        return $next($request);
    }
}
