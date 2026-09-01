<?php


if (!function_exists('activeRoute')) {
    /**
     * Determine if the given route is active.
     *
     * @param  string  $routeName
     * @return string
     */
    function activeRoute($routeName)
    {
        return request()->routeIs($routeName) ? 'active' : '';
    }
}
