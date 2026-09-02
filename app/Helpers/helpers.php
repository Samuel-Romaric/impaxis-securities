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
        if (!request()->routeIs($routeName)) {
            return '';
        }

        return $routeName === 'front.contact' ? 'activeContactRoute' : 'active';
    }
}
