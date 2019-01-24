<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

use Scn\EvalancheSoapStruct\StructTestCase;

class WorkflowConfigurationTest extends StructTestCase
{
    /**
     * @var WorkflowConfiguration
     */
    private $subject;

    /**
     * @var WorkflowStateItemInterface[]
     */
    private $states;

    /**
     * @var WorkflowConnectionItemInterface[]
     */
    private $connections;

    public function setUp()
    {
        $this->states = [$this->getMockBuilder(WorkflowStateItemInterface::class)->getMock()];
        $this->connections = [$this->getMockBuilder(WorkflowConnectionItemInterface::class)->getMock()];
        $this->subject = new WorkflowConfiguration(
            $this->states,
            $this->connections
        );
    }

    public function testGetStatesReturnsArray()
    {
        $this->assertSame(
            $this->states,
            $this->subject->getStates()
        );
    }

    public function testGetConnectionsReturnsArray()
    {
        $this->assertSame(
            $this->connections,
            $this->subject->getConnections()
        );
    }
}
