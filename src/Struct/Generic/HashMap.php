<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

/**
 * List of HashMapItems
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class HashMap implements HashMapInterface
{
    /**
     * @param HashMapItemInterface[] $items
     */
    public function __construct(
        private array $items = []
    ) {
    }

    /**
     * @return HashMapItemInterface[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param HashMapItemInterface[] $items
     */
    public function setItems(array $items): HashMapInterface
    {
        $this->items = $items;
        return $this;
    }
}
