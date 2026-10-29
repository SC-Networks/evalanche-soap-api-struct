<?php

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

/**
 * Represents a state change result
 */
class WorkflowStateChangeResult implements WorkflowStateChangeResultInterface
{
    /** @var bool */
    private $stateChangeSuccessful;
    
    /** @var WorkflowStateChangeResultErrorInterface[] */
    private $errorList;

    /**
     * @param WorkflowStateChangeResultErrorInterface[] $errorList
     */
    public function __construct(
        bool $stateChangeSuccessful = false,
        array $errorList = []
    ) {
        $this->stateChangeSuccessful = $stateChangeSuccessful;
        $this->errorList = $errorList;
    }
    
    public function getStateChangeResultSuccessful(): bool
    {
        return $this->stateChangeSuccessful;
    }

    /**
     * @return WorkflowStateChangeResultErrorInterface[]
     */
    public function getErrorList(): array
    {
        return $this->errorList;
    }
}
