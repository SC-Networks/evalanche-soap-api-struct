<?php declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Workflow;


/**
 * Represents the configuration of a workflow, in Evalanche called a campaign.
 * Contains information about its states and connections.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Workflow
 */
interface WorkflowConfigurationInterface
{
    /**
     * @return WorkflowStateItemInterface[]
     */
    public function getStates(): array;

    /**
     * @return WorkflowConnectionItemInterface[]
     */
    public function getConnections(): array;
}
