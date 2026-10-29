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
    /**
     * @var string
     */
    private $description;

    /**
     * @var int
     */
    private $count;

    public function __construct(string $description = '', int $count = 0)
    {
        $this->description = $description;
        $this->count = $count;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getCount(): int
    {
        return $this->count;
    }
}
