<?php

namespace Scn\EvalancheSoapStruct\Struct\Pool;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface PoolAttributeInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Pool
 */
interface PoolAttributeInterface extends StructInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return int
     */
    public function getTypeId(): int;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getLabel(): string;

    /**
     * @return PoolAttributeOptionInterface[]
     */
    public function getOptions(): array;

    /**
     * @return bool
     */
    public function hasOptions(): bool;

    /**
     * @return bool
     */
    public function addOptions(): bool;
}
