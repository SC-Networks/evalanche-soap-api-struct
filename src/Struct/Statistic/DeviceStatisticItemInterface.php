<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface DeviceStatisticItemInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
interface DeviceStatisticItemInterface extends StructInterface
{
    public function getDescription(): string;

    public function getCount(): int;
}
