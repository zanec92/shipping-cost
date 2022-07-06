<?php

namespace Tests;

use App\Deliveries\DHL;
use App\Entities\Package;
use PHPUnit\Framework\TestCase;

class DHLTest extends TestCase
{
    /**
     * @dataProvider shippingCostProvider
     */
    public function testCalculateShippingCost($weight, $expectedCost)
    {
        $package = new Package();
        $package->setWeight($weight);
        $this->assertSame($expectedCost, (new DHL())->calculateShippingCost($package));
    }

    public function shippingCostProvider()
    {
        return [
            [5, 500],
            [7.8, 780],
            [99.9, 9990],
        ];
    }
}
