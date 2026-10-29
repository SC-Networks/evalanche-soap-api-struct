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
    public function getId(): string;

    public function getStatus(): int;

    public function getStatusDescription(): string;

    public function getNamespace(): string;

    public function getMethod(): string;

    public function getResourceId(): int;

    public function getResultChunks(): int;

    /**
     * @return HashMapInterface[]
     */
    public function getResult(): array;

    public function getChunksLeft(): int;

    public function getResultSize(): int;
}
