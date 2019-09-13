<?php

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface BrowserStatisticItemInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
interface BrowserStatisticItemInterface extends StructInterface
{
    /**
     * @return string
     */
    public function getDescription(): string;

    /**
     * @return string
     */
    public function getVersion(): string;

    /**
     * @return int
     */
    public function getCount(): int;
}
