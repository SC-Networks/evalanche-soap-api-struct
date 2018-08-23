<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Account;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface AccountInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Account
 */
interface AccountInterface extends StructInterface
{
    /**
     * @return AccountingTypeInterface[]
     */
    public function getAccountingTypes(): array;

    /**
     * @return DiscountInterface
     */
    public function getDiscount(): DiscountInterface;
}