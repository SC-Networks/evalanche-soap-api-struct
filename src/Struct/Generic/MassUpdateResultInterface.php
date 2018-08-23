<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface MassUpdateResultInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
interface MassUpdateResultInterface extends StructInterface
{
    /**
     * @return HashMap
     */
    public function getUpdated(): HashMapInterface;

    /**
     * @return HashMap
     */
    public function getCreated(): HashMapInterface;

    /**
     * @return string[]
     */
    public function getIgnored(): array;

    /**
     * @return int[]
     */
    public function getError(): array;
}