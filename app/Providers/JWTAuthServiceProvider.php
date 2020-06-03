<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class JWTAuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        require_once app_path().'/helpers/JwtAuth.php';
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
