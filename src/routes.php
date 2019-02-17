<?php


/**
 * this is package routes for some pages
 */

Route::get('/test', function(){
    return config('laravel-dropdown');
});