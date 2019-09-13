<?php

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface DeviceStatisticItemInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
interface DeviceStatisticItemInterface extends StructInterface
{
    /**
     * @return string
     */
    public function getDescription(): string;

    /**
     * @return int
     */
    public function getCount(): int;
}
