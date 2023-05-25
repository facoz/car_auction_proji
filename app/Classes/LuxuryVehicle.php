<?php
namespace App\Classes;

class LuxuryVehicle extends VehicleBase
{
    protected function calculateBasicFee(): float
    {
        $luxuryCarUserFee = $this->price * 0.1;
        $luxuryCarUserFee = max(25, min(200, $luxuryCarUserFee));
        return $luxuryCarUserFee;
    }
    protected function calculateSpecialFee(): float
    {
        $luxurySellerSpecialFee = $this->price * 0.04;
        return $luxurySellerSpecialFee;
    }
}