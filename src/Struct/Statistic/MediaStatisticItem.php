<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

/**
 * Class MediaStatisticItem
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

    /**
     * @param string $name
     * @param int $clickCount
     * @param int $uniqueClickCount
     */
    public function __construct(string $name = null, int $clickCount = null, int $uniqueClickCount = null)
    {
        $this->name = $name;
        $this->clickCount = $clickCount;
        $this->uniqueClickCount = $uniqueClickCount;
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