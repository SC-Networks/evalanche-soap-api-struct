<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\Struct\StructJsonSerializeTrait;

/**
 * List of HashMapItems
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class HashMap implements HashMapInterface
{
    use StructJsonSerializeTrait;

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
