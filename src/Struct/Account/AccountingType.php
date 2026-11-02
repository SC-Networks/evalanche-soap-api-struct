<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Account;

/**
 * Represents a specific type of accountings.
 * Contains information of the type id, amount, price and currency,
 * as well as a list of AccountingItems.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Account
 */
class AccountingType implements AccountingTypeInterface
{
    /**
     * @param AccountingItemInterface[] $accountingItems
     */
    public function __construct(
        private null|int $typeId = null,
        private null|int $amount = null,
        private null|float $price = null,
        private null|string $currency = null,
        private array $accountingItems = []
    ) {
    }

    public function getTypeId(): int
    {
        return (int) $this->typeId;
    }

    public function getAmount(): int
    {
        return (int) $this->amount;
    }

    public function getPrice(): float
    {
        return (float) $this->price;
    }

    public function getCurrency(): string
    {
        return (string) $this->currency;
    }

    /**
     * @return AccountingItemInterface[]
     */
    public function getAccountingItems(): array
    {
        return $this->accountingItems;
    }
}
