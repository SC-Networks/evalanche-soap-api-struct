<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

/**
 * Represents an error item which can occur in state change requests
 */
class WorkflowStateChangeResultError implements WorkflowStateChangeResultErrorInterface
{
    public function __construct(
        private null|string $type = null,
        private null|string $node = null,
        private null|string $param = null
    ) {
    }
    
    public function getType(): string
    {
        return (string) $this->type;
    }
    
    public function getNode(): string
    {
        return (string) $this->node;
    }
    
    public function getParam(): string
    {
        return (string) $this->param;
    }
}
