<?php

namespace Cchoe\Shipengine;

use Illuminate\Support\ServiceProvider;
use AvoRed\Framework\AdminMenu\Facade as AdminMenuFacade;
use AvoRed\Framework\AdminMenu\AdminMenu;

class Module extends ServiceProvider
{

    /**
     *  Bootstrap any application services
     *  
     *  @return void
     */
    public function boot()
    {
        $this->registerResources();
        
        AdminMenuFacade::add('shipengine')
            ->label('ShipEngine')
            ->route('admin.shipengine.dashboard');

    }

    /**
     * Register any application services
     * 
     * @return void
     */
    public function register()
    {

    }

    protected function registerResources()
    {
        $this->loadRoutesFrom(__DIR__ . "/../routes/web.php");
        $this->loadViewsFrom(__DIR__ . "/../resources/views", 'cchoe-shipengine');
    }
}
