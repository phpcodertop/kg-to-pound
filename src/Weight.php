<?php

namespace Phpcodertop\UnitConversions;

class Weight
{

    private float $kilograms;

    /**
     * @param float $kilograms
     * @return static
     */
    public static function fromKilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    /**
     * Weight constructor.
     * @param float $kilograms
     */
    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    /**
     * @return float
     */
    public function toLbs(): float
    {
        return $this->kilograms * 2.2046;
    }

}
