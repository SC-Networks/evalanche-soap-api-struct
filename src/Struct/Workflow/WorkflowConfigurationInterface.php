<?php

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Represents the result of a workflows getConfiguration call
 */
interface WorkflowConfigurationInterface extends StructInterface
{
    public function getConfigVersion(): string;

    public function getConfiguration(): string;
}
