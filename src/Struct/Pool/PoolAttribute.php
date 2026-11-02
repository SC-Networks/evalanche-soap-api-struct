<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Pool;

/**
 * Represents a PoolAttribute.
 * Contains information about type, name, label and options.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Pool
 */
class PoolAttribute implements PoolAttributeInterface
{
    /**
     * @param list<PoolAttributeOptionInterface> $options
     */
    public function __construct(
        private null|int $id = null,
        private null|int $typeId = null,
        private null|string $name = null,
        private null|string $label = null,
        private array $options = [],
        private null|bool $hasOptions = null,
        private null|bool $addOptions = null
    ) {
    }

    public function getId(): int
    {
        return (int) $this->id;
    }

    public function getTypeId(): int
    {
        return (int) $this->typeId;
    }

    public function getName(): string
    {
        return (string) $this->name;
    }

    public function getLabel(): string
    {
        return (string) $this->label;
    }

    /** @inheritDoc */
    public function getOptions(): array
    {
        return $this->options;
    }

    public function hasOptions(): bool
    {
        return (bool) $this->hasOptions;
    }

    public function addOptions(): bool
    {
        return (bool) $this->addOptions;
    }
}
