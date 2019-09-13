<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\Struct\StructJsonSerializeTrait;

/**
 * Represents a statistic about an article element.
 * Contains information about the name, the number of all clicks and the number of unique clicks.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
class ArticleStatisticItem implements ArticleStatisticItemInterface
{
    use StructJsonSerializeTrait;

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

    /**
     * @param int $id
     * @param string $name
     * @param int $clickCount
     * @param int $uniqueClickCount
     */
    public function __construct(
        int $id = null,
        string $name = null,
        int $clickCount = null,
        int $uniqueClickCount = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->clickCount = $clickCount;
        $this->uniqueClickCount = $uniqueClickCount;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getClickCount(): int
    {
        return $this->clickCount;
    }

    /**
     * @return int
     */
    public function getUniqueClickCount(): int
    {
        return $this->uniqueClickCount;
    }
}