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
     * @param int $id
     * @param int $typeId
     * @param string $name
     * @param string $label
     * @param PoolAttributeOptionInterface[] $options
     * @param bool $hasOptions
     * @param bool $addOptions
     */
    public function __construct(
        int $id = null,
        int $typeId = null,
        string $name = null,
        string $label = null,
        array $options = null,
        bool $hasOptions = null,
        bool $addOptions = null
    ) {
        $this->id = $id;
        $this->typeId = $typeId;
        $this->name = $name;
        $this->label = $label;
        $this->options = $options;
        $this->hasOptions = $hasOptions;
        $this->addOptions = $addOptions;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getTypeId(): int
    {
        return $this->typeId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
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

    /**
     * @return bool
     */
    public function hasOptions(): bool
    {
        return $this->hasOptions;
    }

    /**
     * @return bool
     */
    public function addOptions(): bool
    {
        return $this->addOptions;
    }
}
