<?php

namespace App\Deliveries;

use App\Entities\Package;

class PostOffice extends Delivery
{
    public const NAME = 'post-office';

    private const WEIGHT_LIMIT = 10;

    private const PRICE = 100;
    private const OVER_LIMIT_PRICE = 1000;

    public function calculateShippingCost(Package $package): int
    {
        if ($package->getWeight() <= self::WEIGHT_LIMIT) {
            return self::PRICE;
        } else {
            return self::OVER_LIMIT_PRICE;
        }
    }
}
