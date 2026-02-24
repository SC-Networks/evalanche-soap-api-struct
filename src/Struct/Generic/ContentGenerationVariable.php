<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

/**
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class ContentGenerationVariable implements ContentGenerationVariableInterface
{
    /** @var string */
    private $name;

    /** @var string */
    private $default_value;

    /** @var string */
    private $label;

    /** @var string */
    private $help_text;

    public function __construct(
        string $name = '',
        string $default_value = '',
        string $label = '',
        string $help_text = ''
    ) {
        $this->name = $name;
        $this->default_value = $default_value;
        $this->label = $label;
        $this->help_text = $help_text;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDefaultValue(): string
    {
        return $this->default_value;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getHelpText(): string
    {
        return $this->help_text;
    }
}
