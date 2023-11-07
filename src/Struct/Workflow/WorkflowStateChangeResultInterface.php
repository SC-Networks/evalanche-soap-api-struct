<?php

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Represents a state change result
 */
interface WorkflowStateChangeResultInterface extends StructInterface
{
    public function getStateChangeResultSuccessful(): bool;

    /**
     * @return WorkflowStateChangeResultErrorInterface[]
     */
    public function getErrorList(): array;
}
