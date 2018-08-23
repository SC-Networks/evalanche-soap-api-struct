<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Account;

/**
 * Class Account
 *
 * @package Scn\EvalancheSoapStruct\Struct\Account
 */
class Account implements AccountInterface
{
    /**
     * @var AccountingTypeInterface[]
     */
    private $accountingTypes;

    /**
     * @var DiscountInterface
     */
    private $discount;

    /**
     * @param AccountingTypeInterface[] $accountingTypes
     * @param DiscountInterface $discount
     */
    public function __construct(array $accountingTypes = null, DiscountInterface $discount = null)
    {
        $this->accountingTypes = $accountingTypes;
        $this->discount = $discount;
    }

    /**
     * @return AccountingTypeInterface[]
     */
    public function getAccountingTypes(): array
    {
        return $this->accountingTypes;
    }

    /**
     * @return DiscountInterface
     */
    public function getDiscount(): DiscountInterface
    {
        return $this->discount;
    }
}