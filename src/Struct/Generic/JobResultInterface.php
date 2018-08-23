<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface JobResultInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
interface JobResultInterface extends StructInterface
{
    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @return int
     */
    public function getStatus(): int;

    /**
     * @return string
     */
    public function getStatusDescription(): string;

    /**
     * @return string
     */
    public function getNamespace(): string;

    /**
     * @return string
     */
    public function getMethod(): string;

    /**
     * @return int
     */
    public function getResourceId(): int;

    /**
     * @return int
     */
    public function getResultChunks(): int;

    /**
     * @return HashMapInterface[]
     */
    public function getResult(): array;

    /**
     * @return int
     */
    public function getChunksLeft(): int;

    /**
     * @return int
     */
    public function getResultSize(): int;
}