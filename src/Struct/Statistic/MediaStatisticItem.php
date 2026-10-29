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
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $clickCount;

    /**
     * @var int
     */
    private $uniqueClickCount;

    public function __construct(string $name = '', int $clickCount = 0, int $uniqueClickCount = 0)
    {
        $this->name = $name;
        $this->clickCount = $clickCount;
        $this->uniqueClickCount = $uniqueClickCount;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getClickCount(): int
    {
        return $this->clickCount;
    }

    public function getUniqueClickCount(): int
    {
        return $this->uniqueClickCount;
    }
}
