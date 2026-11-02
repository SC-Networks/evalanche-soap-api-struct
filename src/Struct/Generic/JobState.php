<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

/**
 * Represents the state of a background job
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class JobState implements JobStateInterface
{
    public function __construct(
        private null|string $id = null,
        private null|int $status = null,
        private null|string $statusDescription = null
    ) {
    }

    /** @inheritDoc */
    public function getId(): string
    {
        return (string) $this->id;
    }

    /** @inheritDoc */
    public function getStatus(): int
    {
        return (int) $this->status;
    }

    /** @inheritDoc */
    public function getStatusDescription(): string
    {
        return (string) $this->statusDescription;
    }
}
