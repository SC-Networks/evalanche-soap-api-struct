<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Container;

/**
 * Represents one option for ContainerAttributes.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class ContainerAttributeOption implements ContainerAttributeOptionInterface
{
    public function __construct(
        private null|int $id = null,
        private null|string $name = null,
        private null|string $label = null,
        private null|int $order = null
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

    public function getLabel(): string
    {
        return (string) $this->label;
    }

    public function getOrder(): int
    {
        return (int) $this->order;
    }
}
