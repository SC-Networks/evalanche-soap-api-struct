<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface HashMapItemInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
interface HashMapItemInterface extends StructInterface
{
    public function getKey(): string;

    public function getValue(): string;

    public function setValue(string $value): HashMapItemInterface;
}
