<?php

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

/**
 * Represents an error item which can occur in state change requests
 */
class WorkflowStateChangeResultError implements WorkflowStateChangeResultErrorInterface
{
    /** @var string */
    private $type;

    /** @var string */
    private $node;

    /** @var string */
    private $param;
    
    public function __construct(
        string $type = null,
        string $node = null,
        string $param = null
    ) {
        $this->type = $type;
        $this->node = $node;
        $this->param = $param;
    }
    
    public function getType(): string
    {
        return $this->type;
    }
    
    public function getNode(): string
    {
        return $this->node;
    }
    
    public function getParam(): string
    {
        return $this->param;
    }
}