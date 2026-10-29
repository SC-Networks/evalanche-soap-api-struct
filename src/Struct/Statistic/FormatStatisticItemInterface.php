<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface FormatStatisticItemInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
interface FormatStatisticItemInterface extends StructInterface
{
    public function getClickCount(): int;

    public function getUniqueClickCount(): int;

    public function getClickRate(): float;

    public function getClickRateRelative(): float;

    public function getMultipleClickRate(): float;

    public function getMultipleClickRateRelative(): float;
}
