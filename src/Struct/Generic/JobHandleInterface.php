<?php

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface JobHandleInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
interface JobHandleInterface extends StructInterface
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
}
