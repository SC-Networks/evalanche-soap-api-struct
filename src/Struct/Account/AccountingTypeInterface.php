<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Account;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface AccountingTypeInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Account
 */
interface AccountingTypeInterface extends StructInterface
{
    public function getTypeId(): int;

    public function getAmount(): int;

    public function getPrice(): float;

    public function getCurrency(): string;

    /**
     * @return AccountingItemInterface[]
     */
    public function getAccountingItems(): array;
}
