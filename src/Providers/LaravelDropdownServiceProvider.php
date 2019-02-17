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
        
        
    }

    /**
     * Register package services
     * 
     * @return void
     */
    
    public function register(){
        // register configuration file
        $this->publishes([
            
            __DIR__.'/../config/laravel-dropdown.php' => config_path('laravel-dropdown.php'),
        ]);
        // $this->mergeConfigFrom(__DIR__ . '/../config/laravel-dropdown.php', 'laravel-dropdown');
    }
}