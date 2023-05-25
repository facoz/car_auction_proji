<?php

namespace App\Http\Controllers;

use App\Classes\CommonVehicle;
use App\Classes\LuxuryVehicle;
use App\Http\Requests\CreatePostRequest;


class VehicleController extends Controller
{
    public function calculatePrice(CreatePostRequest $request)
    {
        $type = $request->type;
        $price = $request->price;
        if($type == "common")
        {
            $objVehicle = new CommonVehicle($price, $type);
        }elseif($type == "luxury")
        {
            $objVehicle = new LuxuryVehicle($price, $type);

        }else
        {
            return view('calculate');
        }
        return view('vehicle_data')->with('vehicle',$objVehicle);
    }

    public function show()
    {
        return view('calculate');
    }
}
