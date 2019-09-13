<?php

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface FormatStatisticItemInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
interface FormatStatisticItemInterface extends StructInterface
{
    /**
     * @return int
     */
    public function getClickCount(): int;

    /**
     * @return int
     */
    public function getUniqueClickCount(): int;

    /**
     * @return float
     */
    public function getClickRate(): float;

    /**
     * @return float
     */
    public function getClickRateRelative(): float;

    /**
     * @return float
     */
    public function getMultipleClickRate(): float;

    /**
     * @return float
     */
    public function getMultipleClickRateRelative(): float;
}
