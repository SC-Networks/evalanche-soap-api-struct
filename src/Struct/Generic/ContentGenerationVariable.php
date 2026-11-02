<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

/**
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class ContentGenerationVariable implements ContentGenerationVariableInterface
{
    public function __construct(
        private null|string $name = null,
        private null|string $default_value = null,
        private null|string $label = null,
        private null|string $help_text = null
    ) {
    }

    public function getName(): string
    {
        return (string) $this->name;
    }

    public function getDefaultValue(): string
    {
        return (string) $this->default_value;
    }

    public function getLabel(): string
    {
        return (string) $this->label;
    }

    public function getHelpText(): string
    {
        return (string) $this->help_text;
    }
}
