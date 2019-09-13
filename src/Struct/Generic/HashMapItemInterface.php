<?php

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface HashMapItemInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
interface HashMapItemInterface extends StructInterface
{
    /**
     *
     * @return string
     */
    public function getKey(): string;

    /**
     * @return string
     */
    public function getValue(): string;

    /**
     * @param string $value
     *
     * @return HashMapItemInterface
     */
    public function setValue(string $value): HashMapItemInterface;
}
