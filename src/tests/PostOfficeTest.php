<?php

namespace Tests;

use App\Deliveries\PostOffice;
use App\Entities\Package;
use PHPUnit\Framework\TestCase;

class PostOfficeTest extends TestCase
{
    /**
     * @dataProvider shippingCostProvider
     */
    public function testCalculateShippingCost($weight, $expectedCost)
    {
        $package = new Package();
        $package->setWeight($weight);
        $this->assertSame($expectedCost, (new PostOffice())->calculateShippingCost($package));
    }

    public function shippingCostProvider()
    {
        return [
            [5, 100],
            [7.8, 100],
            [99.9, 1000],
        ];
    }
}
