<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\URL;

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

        if (!in_array($locale, config('app.available_locales'))) {
            abort(404);
        }

        App::setLocale($locale);
        session(['locale' => $locale]);

        // Injecte automatiquement 'locale' dans tous les route() générés
        URL::defaults(['locale' => $locale]);

        return $next($request);
    }
}
