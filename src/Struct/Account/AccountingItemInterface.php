<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Account;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface AccountingItemInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Account
 */
interface AccountingItemInterface extends StructInterface
{
    public function getDescription(): string;

    public function getMandatorId(): int;

    public function getAccountingDate(): string;

    public function getChargeCount(): int;
}
