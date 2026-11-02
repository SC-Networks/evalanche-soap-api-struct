<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Pool;

/**
 * Represents one option of a PoolAttribute.
 * Contains id and value.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Pool
 */
class PoolAttributeOption implements PoolAttributeOptionInterface
{
    public function __construct(
        private null|int $id = null,
        private null|string $value = null
    ) {
    }

    public function getId(): int
    {
        return (int) $this->id;
    }

    public function getValue(): string
    {
        return (string) $this->value;
    }
}
