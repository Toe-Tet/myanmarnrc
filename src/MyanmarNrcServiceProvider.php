<?php

namespace Toetet\MyanmarNrc;

use Illuminate\Support\ServiceProvider;

class MyanmarNrcServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/js', 'myanmarnrc');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'myanmarnrc');

        $this->publishes([
            __DIR__.'/../config/myanmarnrc.php' => config_path('myanmarnrc.php'),
            __DIR__.'/../assets/myanmarnrc.js' => public_path('vendor/myanmarnrc/myanmarnrc.js'),
            __DIR__.'/resources/views' => resource_path('views/vendor/myanmarnrc'),
        ]);
    }
    
    public function register()
    {
        $this->app->singleton('myanmarnrc', function ($app) {
            return new Nrc();
        });
    }
    
}