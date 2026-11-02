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
    public function __construct(
        private null|string $description = null,
        private null|string $version = null,
        private null|int $count = null
    ) {
    }

    public function getDescription(): string
    {
        return (string) $this->description;
    }

    public function getVersion(): string
    {
        return (string) $this->version;
    }

    public function getCount(): int
    {
        return (int) $this->count;
    }
}
