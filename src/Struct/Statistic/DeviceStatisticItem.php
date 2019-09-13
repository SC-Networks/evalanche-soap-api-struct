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

    /**
     * @param string $description
     * @param int $count
     */
    public function __construct(string $description = null, int $count = null)
    {
        $this->description = $description;
        $this->count = $count;
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
    public function getCount(): int
    {
        return $this->count;
    }
}
