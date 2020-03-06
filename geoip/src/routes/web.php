<?php

/***
 * geolocation web service APIs Routes
 * ***/

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});


  // MyVendor\contactform\src\routes\web.php
    Route::group(['namespace' => 'Vigeoip\Geoip\Http\Controllers', 'middleware' => ['web']], function(){
        Route::get('geoinfo/{ip}', 'GeoipController@geoinfo');
    });
