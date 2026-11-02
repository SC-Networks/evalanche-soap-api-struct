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
    public function __construct(
        private null|int $clickCount = null,
        private null|int $uniqueClickCount = null,
        private null|float $clickRate = null,
        private null|float $clickRateRelative = null,
        private null|float $multipleClickRate = null,
        private null|float $multipleClickRateRelative = null
    ) {
    }

    public function getClickCount(): int
    {
        return (int) $this->clickCount;
    }

    public function getUniqueClickCount(): int
    {
        return (int) $this->uniqueClickCount;
    }

    public function getClickRate(): float
    {
        return (float) $this->clickRate;
    }

    public function getClickRateRelative(): float
    {
        return (float) $this->clickRateRelative;
    }

    public function getMultipleClickRate(): float
    {
        return (float) $this->multipleClickRate;
    }

    public function getMultipleClickRateRelative(): float
    {
        return (float) $this->multipleClickRateRelative;
    }
}
