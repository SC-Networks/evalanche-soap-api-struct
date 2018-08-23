<?php

namespace Scn\EvalancheSoapStruct\Struct\Account;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface AccountingItemInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Account
 */
interface AccountingItemInterface extends StructInterface
{
    /**
     * @return string
     */
    public function getDescription(): string;

    /**
     * @return int
     */
    public function getCustomerId(): int;

    /**
     * @return string
     */
    public function getAccountingDate(): string;

    /**
     * @return int
     */
    public function getChargeCount(): int;
}