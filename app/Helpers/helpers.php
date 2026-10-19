<?php
use Illuminate\Support\Str;

if (!function_exists('activeRoute')) {
    /**
     * Determine if the given route is active.
     *
     * @param  string $routes
     * @return string
     */
    function activeRoute(string ...$routes): string
    {
        foreach ($routes as $route) {
            if (request()->routeIs($route)) {
                return 'active';
            }
        }

        return '';
    }
}
