<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

/**
 * Represents a generic format statistic element. Contains information about the number of clicks,
 * the number of unique clicks, click rate as well as relative click rate,
 * multiple click rate as well as relative multiple click rate.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
class FormatStatisticItem implements FormatStatisticItemInterface
{
    /**
     * @var int
     */
    private $clickCount;

    /**
     * @var int
     */
    private $uniqueClickCount;

    /**
     * @var float
     */
    private $clickRate;

    /**
     * @var float
     */
    private $clickRateRelative;

    /**
     * @var float
     */
    private $multipleClickRate;

    /**
     * @var float
     */
    private $multipleClickRateRelative;

    /**
     * @param int $clickCount
     * @param int $uniqueClickCount
     * @param float $clickRate
     * @param float $clickRateRelative
     * @param float $multipleClickRate
     * @param float $multipleClickRateRelative
     */
    public function __construct(
        int $clickCount = null,
        int $uniqueClickCount = null,
        float $clickRate = null,
        float $clickRateRelative = null,
        float $multipleClickRate = null,
        float $multipleClickRateRelative = null
    ) {
        $this->clickCount = $clickCount;
        $this->uniqueClickCount = $uniqueClickCount;
        $this->clickRate = $clickRate;
        $this->clickRateRelative = $clickRateRelative;
        $this->multipleClickRate = $multipleClickRate;
        $this->multipleClickRateRelative = $multipleClickRateRelative;
    }

    /**
     * @return int
     */
    public function getClickCount(): int
    {
        return $this->clickCount;
    }

    /**
     * @return int
     */
    public function getUniqueClickCount(): int
    {
        return $this->uniqueClickCount;
    }

    /**
     * @return float
     */
    public function getClickRate(): float
    {
        return $this->clickRate;
    }

    /**
     * @return float
     */
    public function getClickRateRelative(): float
    {
        return $this->clickRateRelative;
    }

    /**
     * @return float
     */
    public function getMultipleClickRate(): float
    {
        return $this->multipleClickRate;
    }

    /**
     * @return float
     */
    public function getMultipleClickRateRelative(): float
    {
        return $this->multipleClickRateRelative;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}