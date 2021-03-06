<?php 

if(!function_exists('page_title')) {
    function page_title($title) {
        $base_title = 'Laracarte - List of artisans';

        if($title) {
            return $title .' | '. $base_title;
        }

        return $base_title;
    }
}

if(!function_exists('set_ac tive_route')) {
    function set_active_route($route) {
        return Route::is($route) ? 'active':'';
    }
}