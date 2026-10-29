<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface BrowserStatisticItemInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
interface BrowserStatisticItemInterface extends StructInterface
{
    public function getDescription(): string;

    public function getVersion(): string;

    public function getCount(): int;
}
