<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface JobHandleInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
interface JobHandleInterface extends StructInterface
{
    public function getId(): string;

    public function getStatus(): int;

    public function getStatusDescription(): string;

    public function getNamespace(): string;

    public function getMethod(): string;

    public function getResourceId(): int;

    public function getResultChunks(): int;
}
