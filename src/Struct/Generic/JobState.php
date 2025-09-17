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
    /** @var string */
    private $id;

    /** @var int */
    private $status;

    /** @var string */
    private $statusDescription;

    public function __construct(
        string $id = '',
        int $status = 0,
        string $statusDescription = '',
    ) {
        $this->id = $id;
        $this->status = $status;
        $this->statusDescription = $statusDescription;
    }

    /** @inheritDoc */
    public function getId(): string
    {
        return $this->id;
    }

    /** @inheritDoc */
    public function getStatus(): int
    {
        return $this->status;
    }

    /** @inheritDoc */
    public function getStatusDescription(): string
    {
        return $this->statusDescription;
    }
}
