<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Account;

/**
 * Represents an Accountingitem.
 * Contains information about the concerned mandator id, date and amount of charges.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Account
 */
class AccountingItem implements AccountingItemInterface
{
    public function __construct(
        private null|string $description = null,
        private null|int $mandatorId = null,
        private null|string $accountingDate = null,
        private null|int $chargeCount = null
    ) {
    }

    public function getDescription(): string
    {
        return (string) $this->description;
    }

    public function getMandatorId(): int
    {
        return (int) $this->mandatorId;
    }

    public function getAccountingDate(): string
    {
        return (string) $this->accountingDate;
    }

    public function getChargeCount(): int
    {
        return (int) $this->chargeCount;
    }
}
