<?php

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
     * Returns the list of profile ids which have been ignored
     *
     * @return string[]
     */
    public function getIgnored(): array;

    /**
     * Returns the list of profile ids which caused errors
     *
     * @return int[]
     */
    public function getError(): array;
}
