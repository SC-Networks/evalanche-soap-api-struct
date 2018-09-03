<?php

namespace Scn\EvalancheSoapStruct\Struct\Account;

/**
 * Class AccountingItem
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

    /**
     * @param string $description
     * @param int $mandatorId
     * @param string $accountingDate
     * @param int $chargeCount
     */
    public function __construct(
        string $description = null,
        int $mandatorId = null,
        string $accountingDate = null,
        int $chargeCount = null
    ) {
        $this->description = $description;
        $this->mandatorId = $mandatorId;
        $this->accountingDate = $accountingDate;
        $this->chargeCount = $chargeCount;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getMandatorId(): int
    {
        return $this->mandatorId;
    }

    /**
     * @return string
     */
    public function getAccountingDate(): string
    {
        return $this->accountingDate;
    }

    /**
     * @return int
     */
    public function getChargeCount(): int
    {
        return $this->chargeCount;
    }
}