<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Container;

/**
 * Represents one attribute of a container.
 * Contains information about name, label, type, mandatoriness, visibility, etc.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Container
 */
class ContainerAttribute implements ContainerAttributeInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $label;

    /**
     * @var int
     */
    private $typeId;

    /**
     * @var int
     */
    private $groupId;

    /**
     * @var string
     */
    private $helpText;

    /**
     * @var string
     */
    private $inputHelpText;

    /**
     * @var bool
     */
    private $mandatory;

    /**
     * @var bool
     */
    private $visible;

    /**
     * @var string
     */
    private $replacementVariable;

    /**
     * @var bool
     */
    private $allowOptions;

    public function __construct(
        int $id = 0,
        string $name = '',
        string $label = '',
        int $typeId = 0,
        int $groupId = 0,
        string $helpText = '',
        string $inputHelpText = '',
        bool $mandatory = false,
        bool $visible = false,
        string $replacementVariable = '',
        bool $allowOptions = false
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->typeId = $typeId;
        $this->groupId = $groupId;
        $this->helpText = $helpText;
        $this->inputHelpText = $inputHelpText;
        $this->mandatory = $mandatory;
        $this->visible = $visible;
        $this->replacementVariable = $replacementVariable;
        $this->allowOptions = $allowOptions;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getTypeId(): int
    {
        return $this->typeId;
    }

    public function getGroupId(): int
    {
        return $this->groupId;
    }

    public function getHelpText(): string
    {
        return $this->helpText;
    }

    public function getInputHelpText(): string
    {
        return $this->inputHelpText;
    }

    public function getMandatory(): bool
    {
        return $this->mandatory;
    }

    public function getVisible(): bool
    {
        return $this->visible;
    }

    public function getReplacementVariable(): string
    {
        return $this->replacementVariable;
    }

    public function getAllowOptions(): bool
    {
        return $this->allowOptions;
    }
}
