<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Lib\Smartphone\{
    Smartphone, CPU, Display, Camera, Battery};



class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    
    public function register()
    {
        // General binding. Resolved every time
        
        //$this->app->bind('Smartphone', function($app) 
        //{
        //    return new Smartphone('', new CPU(), new Display(), new Camera(), new Battery());
        //});
        

        // Instance binding
        $mySmartphone = new Smartphone('Apple iPhone', new CPU('Qualcomm 5555', 4), new Display('480x320'), new Camera (8), new Battery(1234));
        $this->app->instance('Smartphone', $mySmartphone);


        
        // Singleton binding. Resolved once
        //$this->app->singleton('Smartphone', function($app) {
        //    new Smartphone('', new CPU(), new Display(), new Camera(), new Battery());
        //});
    
        
        // Interface to implementation binding
    
        $this->app->bind(
            'App\Lib\Smartphone\SmartphoneStore',
            'App\Lib\Repositories\ArraySmartphoneStore'
        );
        
        // Automatic resolving
        //$this->app->bind('Smartphone', Smartphone::class); // or full path
        
    }
}
