<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Account;

use Scn\EvalancheSoapStruct\Struct\Exception\StructNotHydratedException;

/**
 * Represents one account.
 * Contains information about the given discount, as well as a list of AccountingTypes.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Account
 */
class Account implements AccountInterface
{
    /**
     * @param list<AccountingTypeInterface> $accountingTypes
     */
    public function __construct(
        private null|DiscountInterface $discount = null,
        private array $accountingTypes = [],
    ) {
    }

    /** @inheritDoc */
    public function getAccountingTypes(): array
    {
        return $this->accountingTypes;
    }

    public function getDiscount(): DiscountInterface
    {
        if (!$this->discount instanceof DiscountInterface) {
            throw new StructNotHydratedException();
        }

        return $this->discount;
    }
}
