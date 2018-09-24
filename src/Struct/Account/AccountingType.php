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
     * @param int $typeId
     * @param int $amount
     * @param float $price
     * @param string $currency
     * @param AccountingItemInterface[] $accountingItems
     */
    public function __construct(
        int $typeId = null,
        int $amount = null,
        float $price = null,
        string $currency = null,
        array $accountingItems = null
    ) {
        $this->typeId = $typeId;
        $this->amount = $amount;
        $this->price = $price;
        $this->currency = $currency;
        $this->accountingItems = $accountingItems;
    }

    /**
     * @return int
     */
    public function getTypeId(): int
    {
        return $this->typeId;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return string
     */
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
