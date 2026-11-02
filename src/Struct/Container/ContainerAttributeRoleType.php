<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Container;

/**
 * Represents a role type for ContainerAttributes
 *
 * @package Scn\EvalancheSoapStruct\Struct\Container
 */
class ContainerAttributeRoleType implements ContainerAttributeRoleTypeInterface
{
    public function __construct(
        private null|int $id = null,
        private null|string $name = null
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
}
