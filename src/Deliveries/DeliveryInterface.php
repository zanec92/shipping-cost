<?php

namespace App\Deliveries;

use App\Entities\Package;

interface DeliveryInterface
{
    public function getName(): string;

    public function calculateShippingCost(Package $package): int;
}
