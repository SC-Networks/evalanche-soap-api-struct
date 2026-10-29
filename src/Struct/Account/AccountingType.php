<?php

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
     * @var int
     */
    private $typeId;

    /**
     * @var int
     */
    private $amount;

    /**
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var AccountingItemInterface[]
     */
    private $accountingItems;

    /**
     * @param AccountingItemInterface[] $accountingItems
     */
    public function __construct(
        int $typeId = 0,
        int $amount = 0,
        float $price = 0.0,
        string $currency = '',
        array $accountingItems = []
    ) {
        $this->typeId = $typeId;
        $this->amount = $amount;
        $this->price = $price;
        $this->currency = $currency;
        $this->accountingItems = $accountingItems;
    }

    public function getTypeId(): int
    {
        return $this->typeId;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return AccountingItemInterface[]
     */
    public function getAccountingItems(): array
    {
        return $this->accountingItems;
    }
}
