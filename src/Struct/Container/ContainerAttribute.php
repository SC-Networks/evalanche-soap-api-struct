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

    /**
     * @param int $id
     * @param string $name
     * @param string $label
     * @param int $typeId
     * @param int $groupId
     * @param string $helpText
     * @param string $inputHelpText
     * @param bool $mandatory
     * @param bool $visible
     * @param string $replacementVariable
     * @param bool $allowOptions
     */
    public function __construct(
        int $id = null,
        string $name = null,
        string $label = null,
        int $typeId = null,
        int $groupId = null,
        string $helpText = null,
        string $inputHelpText = null,
        bool $mandatory = null,
        bool $visible = null,
        string $replacementVariable = null,
        bool $allowOptions = null
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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
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
     * @return int
     */
    public function getTypeId(): int
    {
        return $this->typeId;
    }

    /**
     * @return int
     */
    public function getGroupId(): int
    {
        return $this->groupId;
    }

    /**
     * @return string
     */
    public function getHelpText(): string
    {
        return $this->helpText;
    }

    /**
     * @return string
     */
    public function getInputHelpText(): string
    {
        return $this->inputHelpText;
    }

    /**
     * @return bool
     */
    public function getMandatory(): bool
    {
        return $this->mandatory;
    }

    /**
     * @return bool
     */
    public function getVisible(): bool
    {
        return $this->visible;
    }

    /**
     * @return string
     */
    public function getReplacementVariable(): string
    {
        return $this->replacementVariable;
    }

    /**
     * @return bool
     */
    public function getAllowOptions(): bool
    {
        return $this->allowOptions;
    }
}
