<?php 
namespace Obiefy\LaravelDropdown\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelDropdownServiceProvider extends ServiceProvider 
{

    /**
     * Bootstrap package services
     * 
     * @return void
     */
    
    public function boot(){
        echo ("this is from obiefy, thanks god");
    }

    /**
     * Register package services
     * 
     * @return void
     */
    
    public function register(){

    }
}