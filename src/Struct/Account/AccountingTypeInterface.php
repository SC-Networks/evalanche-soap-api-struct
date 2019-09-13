<?php

namespace Scn\EvalancheSoapStruct\Struct\Account;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface AccountingTypeInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Account
 */
interface AccountingTypeInterface extends StructInterface
{
    /**
     * @return int
     */
    public function getTypeId(): int;

    /**
     * @return int
     */
    public function getAmount(): int;

    /**
     * @return float
     */
    public function getPrice(): float;

    /**
     * @return string
     */
    public function getCurrency(): string;

    /**
     * @return AccountingItemInterface[]
     */
    public function getAccountingItems(): array;
}
