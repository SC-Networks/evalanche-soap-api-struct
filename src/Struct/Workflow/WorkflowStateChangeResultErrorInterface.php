<?php

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Represents an error item which can occur in state change requests
 */
interface WorkflowStateChangeResultErrorInterface extends StructInterface
{
    public function getType(): string;

    public function getNode(): string;

    public function getParam(): string;
}
