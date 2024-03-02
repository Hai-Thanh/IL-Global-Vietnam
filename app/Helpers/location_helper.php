<?php


use Illuminate\Support\Facades\Session;

if (!function_exists('locationHelper')) {
    function locationHelper()
    {
        $locale = Session::get('locale');
        return $locale;
    }

}
