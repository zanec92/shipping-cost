<?php

namespace App\Deliveries;

abstract class Delivery implements DeliveryInterface
{
    public function getName(): string
    {
        return static::NAME;
    }
}
