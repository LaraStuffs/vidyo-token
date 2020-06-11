<?php

namespace LaraStuffs\VidyoToken;

use Illuminate\Support\ServiceProvider;

class VidyoTokenServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/vidyo.php' => config_path('vidyo.php')
        ]);
    }
}
