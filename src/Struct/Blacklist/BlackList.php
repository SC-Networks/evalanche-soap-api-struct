<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Blacklist;

/**
 * Represents a list of BlackListItems for one specific mandator.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Blacklist
 */
class BlackList implements BlackListInterface
{
    /**
     * @var int
     */
    private $mandatorId;

    /**
     * @var BlackListItemInterface[]
     */
    private $items;

    public function __construct(int $mandatorId = 0, array $items = [])
    {
        $this->mandatorId = $mandatorId;
        $this->items = $items;
    }

    public function getMandatorId(): int
    {
        return $this->mandatorId;
    }

    /**
     * @return BlackListItemInterface[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
}
