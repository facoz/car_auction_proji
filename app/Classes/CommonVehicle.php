<?php
namespace App\Classes;

class CommonVehicle extends VehiCleBase
{
    protected function calculateBasicFee(): float
    {
        $commonCarUserFee = $this->price * 0.1;
        $commonCarUserFee = max(10, min(50, $commonCarUserFee));
        return $commonCarUserFee;
    }
    protected function calculateSpecialFee(): float
    {
        $commonSellerSpecialFee = $this->price * 0.02;
        return $commonSellerSpecialFee;
    }
}