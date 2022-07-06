<?php

namespace App\Entities;

class Package
{
    private float $weight;

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }
}
