<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\Struct\StructJsonSerializeTrait;

/**
 * Displays statistics about a browser.
 * Contains information about the version, as well as the number of its usage.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
class BrowserStatisticItem implements BrowserStatisticItemInterface
{
    use StructJsonSerializeTrait;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $version;

    /**
     * @var int
     */
    private $count;

    /**
     * @param string $description
     * @param string $version
     * @param int $count
     */
    public function __construct(string $description = null, string $version = null, int $count = null)
    {
        $this->description = $description;
        $this->version = $version;
        $this->count = $count;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
}