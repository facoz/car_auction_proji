<?php

namespace Tests\Unit\Classes;

use Tests\TestCase;
use App\Classes\LuxuryVehicle;

class LuxuryVehicleTest extends TestCase
{
    public function testCalculateUserFee()
    {
        $luxuryVehicle = new LuxuryVehicle(1000, 'luxury');
        $userFee = $luxuryVehicle->calculateBasicFee();

        $this->assertEquals(100, $userFee);
    }

    public function testCalculateSellerSpecialFee()
    {
        $luxuryVehicle = new LuxuryVehicle(1000, 'luxury');
        $sellerSpecialFee = $luxuryVehicle->calculateSpecialFee();

        $this->assertEquals(40, $sellerSpecialFee);
    }
}
