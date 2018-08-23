<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

/**
 * Class LinkStatisticItem
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
class LinkStatisticItem implements LinkStatisticItemInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $url;

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
     * @param string $url
     * @param string $name
     * @param int $clickCount
     * @param int $uniqueClickCount
     */
    public function __construct(
        int $id = null,
        string $url = null,
        string $name = null,
        int $clickCount = null,
        int $uniqueClickCount = null
    ) {
        $this->id = $id;
        $this->url = $url;
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
    public function getUrl(): string
    {
        return $this->url;
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