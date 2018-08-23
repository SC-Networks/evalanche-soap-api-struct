<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

/**
 * Class HashMap
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class HashMap implements HashMapInterface
{
    /**
     * @var HashMapItemInterface[]
     */
    private $items;

    /**
     * @param HashMapItemInterface[] $items
     */
    public function __construct(array $items = [])
    {
        $this->items = $items;
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
     *
     * @return HashMapInterface
     */
    public function setItems(array $items): HashMapInterface
    {
        $this->items = $items;
        return $this;
    }
}