<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

/**
 * Representates a background job.
 * Contains information about state, method, resource and amount of chunks in the result.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class JobHandle implements JobHandleInterface
{
    public function __construct(
        private null|string $id = null,
        private null|int $status = null,
        private null|string $statusDescription = null,
        private null|string $namespace = null,
        private null|string $method = null,
        private null|int $resourceId = null,
        private null|int $resultChunks = null
    ) {
    }

    public function getId(): string
    {
        return (string) $this->id;
    }

    public function getStatus(): int
    {
        return (int) $this->status;
    }

    public function getStatusDescription(): string
    {
        return (string) $this->statusDescription;
    }

    public function getNamespace(): string
    {
        return (string) $this->namespace;
    }

    public function getMethod(): string
    {
        return (string) $this->method;
    }

    public function getResourceId(): int
    {
        return (int) $this->resourceId;
    }

    public function getResultChunks(): int
    {
        return (int) $this->resultChunks;
    }
}
