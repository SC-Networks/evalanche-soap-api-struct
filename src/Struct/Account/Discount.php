<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Account;

/**
 * Represents one discount.
 * Contains information about price and discount in percent.
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

    public function __construct(string $description = '', float $percent = 0.0, float $price = 0.0)
    {
        $this->description = $description;
        $this->percent = $percent;
        $this->price = $price;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPercent(): float
    {
        return $this->percent;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
