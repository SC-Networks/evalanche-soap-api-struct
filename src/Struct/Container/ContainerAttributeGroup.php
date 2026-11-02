<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Container;

/**
 * Represents a group for ContainerAttributes.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class ContainerAttributeGroup implements ContainerAttributeGroupInterface
{
    public function __construct(
        private null|int $id = null,
        private null|string $name = null,
        private null|int $sortOrder = null
    ) {
    }

    public function getId(): int
    {
        return (int) $this->id;
    }

    public function getName(): string
    {
        return (string) $this->name;
    }

    public function getSortOrder(): int
    {
        return (int) $this->sortOrder;
    }
}
