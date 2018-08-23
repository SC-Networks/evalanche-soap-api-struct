<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Blacklist;

/**
 * Class BlackList
 *
 * @package Scn\EvalancheSoapStruct\Struct\Blacklist
 */
class BlackList implements BlackListInterface
{
    /**
     * @var int
     */
    private $customerId;

    /**
     * @var BlackListItemInterface[]
     */
    private $items;

    /**
     * @param int $customerId
     * @param array $items
     */
    public function __construct(int $customerId = null, array $items = null)
    {
        $this->customerId = $customerId;
        $this->items = $items;
    }

    /**
     * @return int
     */
    public function getCustomerId(): int
    {
        return $this->customerId;
    }

    /**
     * @return BlackListItemInterface[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
}