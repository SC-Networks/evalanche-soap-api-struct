<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

/**
 * Represents a statistic about links.
 * Contains information about the id, url and name as well as the number of all clicks and the number of unique clicks.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
class LinkStatisticItem implements LinkStatisticItemInterface
{
    public function __construct(
        private null|int $id = null,
        private null|string $url = null,
        private null|string $name = null,
        private null|int $clickCount = null,
        private null|int $uniqueClickCount = null
    ) {
    }

    public function getId(): int
    {
        return (int) $this->id;
    }

    public function getUrl(): string
    {
        return (string) $this->url;
    }

    public function getName(): string
    {
        return (string) $this->name;
    }

    public function getClickCount(): int
    {
        return (int) $this->clickCount;
    }

    public function getUniqueClickCount(): int
    {
        return (int) $this->uniqueClickCount;
    }
}
