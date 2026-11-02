<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

/**
 * Represents a statistic about the used mail clients.
 * Contains information about the description of the mail client as well as the number.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
class MailClientStatisticItem implements MailClientStatisticItemInterface
{
    public function __construct(
        private null|string $description = null,
        private null|int $count = null
    ) {
    }

    public function getDescription(): string
    {
        return (string) $this->description;
    }

    public function getCount(): int
    {
        return (int) $this->count;
    }
}
