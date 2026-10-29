<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Pool;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface PoolAttributeInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Pool
 */
interface PoolAttributeInterface extends StructInterface
{
    public function getId(): int;

    public function getTypeId(): int;

    public function getName(): string;

    public function getLabel(): string;

    /**
     * @return PoolAttributeOptionInterface[]
     */
    public function getOptions(): array;

    public function hasOptions(): bool;

    public function addOptions(): bool;
}
