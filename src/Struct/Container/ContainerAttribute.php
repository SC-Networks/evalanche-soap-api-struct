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
    public function __construct(
        private null|int $id = null,
        private null|string $name = null,
        private null|string $label = null,
        private null|int $typeId = null,
        private null|int $groupId = null,
        private null|string $helpText = null,
        private null|string $inputHelpText = null,
        private null|bool $mandatory = null,
        private null|bool $visible = null,
        private null|string $replacementVariable = null,
        private null|bool $allowOptions = null
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

    public function getTypeId(): int
    {
        return (int) $this->typeId;
    }

    public function getGroupId(): int
    {
        return (int) $this->groupId;
    }

    public function getHelpText(): string
    {
        return (string) $this->helpText;
    }

    public function getInputHelpText(): string
    {
        return (string) $this->inputHelpText;
    }

    public function getMandatory(): bool
    {
        return (bool) $this->mandatory;
    }

    public function getVisible(): bool
    {
        return (bool) $this->visible;
    }

    public function getReplacementVariable(): string
    {
        return (string) $this->replacementVariable;
    }

    public function getAllowOptions(): bool
    {
        return (bool) $this->allowOptions;
    }
}
