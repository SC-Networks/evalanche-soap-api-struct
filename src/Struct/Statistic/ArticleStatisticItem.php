<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

/**
 * Represents a statistic about an article element.
 * Contains information about the name, the number of all clicks and the number of unique clicks.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
class ArticleStatisticItem implements ArticleStatisticItemInterface
{
    /**
     * @var int
     */
    private $id;

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

    public function __construct(
        int $id = 0,
        string $name = '',
        int $clickCount = 0,
        int $uniqueClickCount = 0
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->clickCount = $clickCount;
        $this->uniqueClickCount = $uniqueClickCount;
    }

    public function getId(): int
    {
        return $this->id;
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
