<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

/**
 * Represents a state change result
 */
class WorkflowStateChangeResult implements WorkflowStateChangeResultInterface
{
    /**
     * @param WorkflowStateChangeResultErrorInterface[] $errorList
     */
    public function __construct(
        private null|bool $stateChangeSuccessful = null,
        private array $errorList = []
    ) {
    }
    
    public function getStateChangeResultSuccessful(): bool
    {
        return (bool) $this->stateChangeSuccessful;
    }

    /**
     * @return WorkflowStateChangeResultErrorInterface[]
     */
    public function getErrorList(): array
    {
        return $this->errorList;
    }
}
