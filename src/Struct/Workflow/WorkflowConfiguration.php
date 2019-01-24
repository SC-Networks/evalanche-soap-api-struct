<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

/**
 * Represents the configuration of a workflow, in Evalanche called a campaign.
 * Contains information about its states and connections.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Workflow
 */
class WorkflowConfiguration implements WorkflowConfigurationInterface
{
    /**
     * @var WorkflowStateItemInterface[]
     */
    private $states;

    /**
     * @var WorkflowConnectionItemInterface[]
     */
    private $connections;

    /**
     * @param array $states
     * @param array $connections
     */
    public function __construct(
        array $states = [],
        array $connections = []
    )
    {
        $this->states = $states;
        $this->connections = $connections;
    }

    /**
     * @return WorkflowStateItemInterface[]
     */
    public function getStates(): array
    {
        return $this->states;
    }

    /**
     * @return WorkflowConnectionItemInterface[]
     */
    public function getConnections(): array
    {
        return $this->connections;
    }
}
