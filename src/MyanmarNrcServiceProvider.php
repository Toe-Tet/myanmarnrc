<?php

namespace Toetet\MyanmarNrc;

use Illuminate\Support\ServiceProvider;

class MyanmarNrcServiceProvider extends ServiceProvider {
    public function boot()
    {
        // $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/js', 'myanmarnrc');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'myanmarnrc');
        // $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
        $this->publishes([
            __DIR__.'/../config/myanmarnrc.php' => config_path('myanmarnrc.php'),
            __DIR__.'/../assets/myanmarnrc.js' => public_path('vendor/myanmarnrc/myanmarnrc.js'),
            __DIR__.'/resources/views' => resource_path('views/vendor/myanmarnrc'),
        ]);

        // $this->mergeConfigFrom(
        //     __DIR__.'/config/myanmarnrc.php', 'myanmarnrc'
        // );
        // view()->share('nrc_regions', )
        // $this->publishes([
        //     __DIR__.'/resources/js/components' => resource_path('js/components/myanmarnrc'),
        // ]);
    }
    
    public function register()
    {
        $this->app->singleton('myanmarnrc', function ($app) {
            return new Nrc();
        });
    }
}