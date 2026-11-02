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
    public function __construct(
        private null|int $mandatorId = null,
        /**
         * @var BlackListItemInterface[]
         */
        private array $items = []
    ) {
    }

    public function getMandatorId(): int
    {
        return (int) $this->mandatorId;
    }

    /**
     * @return BlackListItemInterface[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
}
