<?php

use Illuminate\Support\Facades\Route;

$baseAdminUrl = config('avored-ecommerce.admin_url');
 
 Route::middleware(['web'])
     ->prefix($baseAdminUrl . '/shipengine/') // prefix the URI
     ->name('admin.shipengine.') // prefix the route name
     ->namespace('Cchoe\Shipengine\Http\Controllers') // sets namespace for controllers
     ->group(function () {

        Route::get('dashboard', 'ShipengineViewController@getDashboard')->name('dashboard');
     });

