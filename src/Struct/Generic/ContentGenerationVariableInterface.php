<?php

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
interface ContentGenerationVariableInterface extends StructInterface
{
    public function getName(): string;

    public function getDefaultValue(): string;

    public function getLabel(): string;

    public function getHelpText(): string;
}
