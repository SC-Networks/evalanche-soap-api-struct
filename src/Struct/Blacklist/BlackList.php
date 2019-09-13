<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Blacklist;

use Scn\EvalancheSoapStruct\Struct\StructJsonSerializeTrait;

/**
 * Represents a list of BlackListItems for one specific mandator.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Blacklist
 */
class BlackList implements BlackListInterface
{
    use StructJsonSerializeTrait;

    /**
     * @var int
     */
    private $mandatorId;

    /**
     * @var BlackListItemInterface[]
     */
    private $items;

    /**
     * @param int $mandatorId
     * @param array $items
     */
    public function __construct(int $mandatorId = null, array $items = null)
    {
        $this->mandatorId = $mandatorId;
        $this->items = $items;
    }

    /**
     * @return int
     */
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
