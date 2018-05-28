<?php

namespace Cchoe\Shipengine\Http\Controllers;

class ShipengineViewController extends Controller 
{
    public function getDashboard()
    {
        return view('cchoe-shipengine::dashboard.dashboard');
    }
}
