<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

/**
 * Represents a statistic of the devices used.
 * Contains information about the description of the devices and the Count.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
class DeviceStatisticItem implements DeviceStatisticItemInterface
{
    public function __construct(
        private null|string $description = null,
        private null|int $count = null
    ) {
    }

    public function getDescription(): string
    {
        return (string) $this->description;
    }

    public function getCount(): int
    {
        return (int) $this->count;
    }
}
