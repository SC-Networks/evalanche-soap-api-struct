<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

/**
 * Represents the result of a background job.
 * Contains information about state, method, result and the amount of result items.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class JobResult implements JobResultInterface
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

    /**
     * @var HashMap[]
     */
    private $result;

    /**
     * @var int
     */
    private $chunksLeft;

    /**
     * @var int
     */
    private $resultSize;

    /**
     * @param HashMapInterface[] $result
     */
    public function __construct(
        string $id = '',
        int $status = 0,
        string $statusDescription = '',
        string $namespace = '',
        string $method = '',
        int $resourceId = 0,
        int $resultChunks = 0,
        array $result = [],
        int $chunksLeft = 0,
        int $resultSize = 0
    ) {
        $this->id = $id;
        $this->status = $status;
        $this->statusDescription = $statusDescription;
        $this->namespace = $namespace;
        $this->method = $method;
        $this->resourceId = $resourceId;
        $this->resultChunks = $resultChunks;
        $this->result = $result;
        $this->chunksLeft = $chunksLeft;
        $this->resultSize = $resultSize;
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

    /**
     * @return HashMapInterface[]
     */
    public function getResult(): array
    {
        return $this->result;
    }

    public function getChunksLeft(): int
    {
        return $this->chunksLeft;
    }

    public function getResultSize(): int
    {
        return $this->resultSize;
    }
}
