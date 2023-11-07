<?php

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

/**
 * Represents a state change result
 */
class WorkflowStateChangeResult implements WorkflowStateChangeResultInterface
{
    /** @var bool|null */
    private $stateChangeSuccessful;
    
    /** @var WorkflowStateChangeResultErrorInterface[]|null */
    private $errorList;

    /**
     * @param WorkflowStateChangeResultErrorInterface[]|null $errorList
     */
    public function __construct(
        bool $stateChangeSuccessful = null,
        array $errorList = null
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
