<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface HashMapInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
interface HashMapInterface extends StructInterface
{
    /**
     * @return HashMapItemInterface[]
     */
    public function getItems(): array;

    /**
     * @param HashMapItemInterface[] $items
     *
     * @return HashMapInterface
     */
    public function setItems(array $items): HashMapInterface;
}