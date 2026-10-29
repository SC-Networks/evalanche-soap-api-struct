<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

/**
 * Displays statistics about a browser.
 * Contains information about the version, as well as the number of its usage.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
class BrowserStatisticItem implements BrowserStatisticItemInterface
{
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

    public function __construct(string $description = '', string $version = '', int $count = 0)
    {
        $this->description = $description;
        $this->version = $version;
        $this->count = $count;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function getCount(): int
    {
        return $this->count;
    }
}
