<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\Struct\StructJsonSerializeTrait;

/**
 * Represents the result of a background job.
 * Contains information about state, method, result and the amount of result items.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class JobResult implements JobResultInterface
{
    use StructJsonSerializeTrait;

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
     * @param string $id
     * @param int $status
     * @param string $statusDescription
     * @param string $namespace
     * @param string $method
     * @param int $resourceId
     * @param int $resultChunks
     * @param HashMapInterface[] $result
     * @param int $chunksLeft
     * @param int $resultSize
     */
    public function __construct(
        string $id = null,
        int $status = null,
        string $statusDescription = null,
        string $namespace = null,
        string $method = null,
        int $resourceId = null,
        int $resultChunks = null,
        array $result = null,
        int $chunksLeft = null,
        int $resultSize = null
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

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getStatusDescription(): string
    {
        return $this->statusDescription;
    }

    /**
     * @return string
     */
    public function getNamespace(): string
    {
        return $this->namespace;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @return int
     */
    public function getResourceId(): int
    {
        return $this->resourceId;
    }

    /**
     * @return int
     */
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

    /**
     * @return int
     */
    public function getChunksLeft(): int
    {
        return $this->chunksLeft;
    }

    /**
     * @return int
     */
    public function getResultSize(): int
    {
        return $this->resultSize;
    }
}
