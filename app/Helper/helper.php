<?php

if (!function_exists('locale')) {
    function locale()
    {
        return app()->getLocale();
    }
}
function locale_url($locale)
{
    $segments = request()->segments();

    if (count($segments) == 0) {
        return '/' . $locale;
    }

    $segments[0] = $locale;

    return '/' . implode('/', $segments);
}


