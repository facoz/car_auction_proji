<?php

namespace App\vehicle_functions;

use Illuminate\Support\Facades\Facade;

class VechiCleFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'vehicleFunctions';
    }
}