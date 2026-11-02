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
    public function __construct(
        private null|string $description = null,
        private null|float $percent = null,
        private null|float $price = null
    ) {
    }

    public function getDescription(): string
    {
        return (string) $this->description;
    }

    public function getPercent(): float
    {
        return (float) $this->percent;
    }

    public function getPrice(): float
    {
        return (float) $this->price;
    }
}
