<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Pool;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface PoolAttributeOptionInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Pool
 */
interface PoolAttributeOptionInterface extends StructInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return string
     */
    public function getValue(): string;
}