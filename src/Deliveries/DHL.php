<?php

namespace App\Deliveries;

use App\Entities\Package;

class DHL extends Delivery
{
    public const NAME = 'dhl';

    private const COST_PER_KILOGRAM = 100;

    public function calculateShippingCost(Package $package): int
    {
        return ceil($package->getWeight() * self::COST_PER_KILOGRAM);
    }
}
