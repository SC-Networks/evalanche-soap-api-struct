<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

/**
 * Represents a statistic about a media element.
 * Contains information about its name, the number of all clicks and the number of unique clicks.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
class MediaStatisticItem implements MediaStatisticItemInterface
{
    public function __construct(
        private null|string $name = null,
        private null|int $clickCount = null,
        private null|int $uniqueClickCount = null
    ) {
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
