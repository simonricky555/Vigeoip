<?php

namespace Vigeoip\Geoip;

use Illuminate\Support\ServiceProvider;

class IpGeoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
		 
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // MyVendor\contactform\src\ContactFormServiceProvider.php
		$this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
}
