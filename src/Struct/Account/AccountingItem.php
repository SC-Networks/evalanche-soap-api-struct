<?php

namespace Scn\EvalancheSoapStruct\Struct\Account;

/**
 * Represents an Accountingitem.
 * Contains information about the concerned mandator id, date and amount of charges.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Account
 */
class AccountingItem implements AccountingItemInterface
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var int
     */
    private $mandatorId;

    /**
     * @var string
     */
    private $accountingDate;

    /**
     * @var int
     */
    private $chargeCount;

    public function __construct(
        string $description = '',
        int $mandatorId = 0,
        string $accountingDate = '',
        int $chargeCount = 0
    ) {
        $this->description = $description;
        $this->mandatorId = $mandatorId;
        $this->accountingDate = $accountingDate;
        $this->chargeCount = $chargeCount;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getMandatorId(): int
    {
        return $this->mandatorId;
    }

    public function getAccountingDate(): string
    {
        return $this->accountingDate;
    }

    public function getChargeCount(): int
    {
        return $this->chargeCount;
    }
}
