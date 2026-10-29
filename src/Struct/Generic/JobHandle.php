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
    /**
     * @var string
     */
    private $id;

    /**
     * @var int
     */
    private $status;

    /**
     * @var string
     */
    private $statusDescription;

    /**
     * @var string
     */
    private $namespace;

    /**
     * @var string
     */
    private $method;

    /**
     * @var int
     */
    private $resourceId;

    /**
     * @var int
     */
    private $resultChunks;

    public function __construct(
        string $id = null,
        int $status = null,
        string $statusDescription = null,
        string $namespace = null,
        string $method = null,
        int $resourceId = null,
        int $resultChunks = null
    ) {
        $this->id = $id;
        $this->status = $status;
        $this->statusDescription = $statusDescription;
        $this->namespace = $namespace;
        $this->method = $method;
        $this->resourceId = $resourceId;
        $this->resultChunks = $resultChunks;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function getStatusDescription(): string
    {
        return $this->statusDescription;
    }

    public function getNamespace(): string
    {
        return $this->namespace;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getResourceId(): int
    {
        return $this->resourceId;
    }

    public function getResultChunks(): int
    {
        return $this->resultChunks;
    }
}
