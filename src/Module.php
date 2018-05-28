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
        
        $this->registerMenus();
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

    protected function registerMenus()
    {
        AdminMenuFacade::add('shipengine')
            ->label('ShipEngine')
            ->route('#');

        $shipengine_menu = AdminMenuFacade::get('shipengine');

        $dashboard_menu = new AdminMenu();
        $dashboard_menu->key('dashboard')
            ->label('Dashboard')
            ->route('admin.shipengine.dashboard');

        $config_menu = new AdminMenu();
        $config_menu->key('config')
            ->label('Configuration')
            ->route('admin.shipengine.config');

        $shipengine_menu->subMenu('dashboard', $dashboard_menu);
        $shipengine_menu->subMenu('config', $config_menu);
    }
}
