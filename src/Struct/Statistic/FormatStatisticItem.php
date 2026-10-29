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

    public function __construct(
        int $clickCount = 0,
        int $uniqueClickCount = 0,
        float $clickRate = 0.0,
        float $clickRateRelative = 0.0,
        float $multipleClickRate = 0.0,
        float $multipleClickRateRelative = 0.0
    ) {
        $this->clickCount = $clickCount;
        $this->uniqueClickCount = $uniqueClickCount;
        $this->clickRate = $clickRate;
        $this->clickRateRelative = $clickRateRelative;
        $this->multipleClickRate = $multipleClickRate;
        $this->multipleClickRateRelative = $multipleClickRateRelative;
    }

    public function getClickCount(): int
    {
        return $this->clickCount;
    }

    public function getUniqueClickCount(): int
    {
        return $this->uniqueClickCount;
    }

    public function getClickRate(): float
    {
        return $this->clickRate;
    }

    public function getClickRateRelative(): float
    {
        return $this->clickRateRelative;
    }

    public function getMultipleClickRate(): float
    {
        return $this->multipleClickRate;
    }

    public function getMultipleClickRateRelative(): float
    {
        return $this->multipleClickRateRelative;
    }
}
