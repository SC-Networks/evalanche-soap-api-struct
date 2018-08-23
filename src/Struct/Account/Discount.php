<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Account;

/**
 * Class Discount
 *
 * @package Scn\EvalancheSoapStruct\Struct\Account
 */
class Discount implements DiscountInterface
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var float
     */
    private $percent;

    /**
     * @var float
     */
    private $price;

    /**
     * @param string $description
     * @param float $percent
     * @param float $price
     */
    public function __construct(string $description = null, float $percent = null, float $price = null)
    {
        $this->description = $description;
        $this->percent = $percent;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return float
     */
    public function getPercent(): float
    {
        return $this->percent;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}