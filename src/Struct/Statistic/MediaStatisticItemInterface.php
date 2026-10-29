<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface MediaStatisticItemInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
interface MediaStatisticItemInterface extends StructInterface
{
    public function getName(): string;

    public function getClickCount(): int;

    public function getUniqueClickCount(): int;
}
