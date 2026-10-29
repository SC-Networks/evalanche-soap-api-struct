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
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $typeId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $label;

    /**
     * @var PoolAttributeOption[]
     */
    private $options;

    /**
     * @var bool
     */
    private $hasOptions;

    /**
     * @var bool
     */
    private $addOptions;

    /**
     * @param PoolAttributeOptionInterface[] $options
     */
    public function __construct(
        int $id = 0,
        int $typeId = 0,
        string $name = '',
        string $label = '',
        array $options = [],
        bool $hasOptions = false,
        bool $addOptions = false
    ) {
        $this->id = $id;
        $this->typeId = $typeId;
        $this->name = $name;
        $this->label = $label;
        $this->options = $options;
        $this->hasOptions = $hasOptions;
        $this->addOptions = $addOptions;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTypeId(): int
    {
        return $this->typeId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @return PoolAttributeOption[]
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    public function hasOptions(): bool
    {
        return $this->hasOptions;
    }

    public function addOptions(): bool
    {
        return $this->addOptions;
    }
}
