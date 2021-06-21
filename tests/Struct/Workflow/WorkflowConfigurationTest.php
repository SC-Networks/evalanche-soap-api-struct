<?php

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

use Scn\EvalancheSoapStruct\StructTestCase;

class WorkflowConfigurationTest extends StructTestCase 
{
    private $configVersion = 'some-config-version';
    
    private $configuration = 'some-configuration';
    
    /** @var WorkflowConfiguration */
    private $subject;
    
    public function setUp(): void
    {
        $this->subject = new WorkflowConfiguration(
            $this->configVersion,
            $this->configuration
        );
    }
    
    public function testGetConfigVersionReturnsValue(): void
    {
        $this->assertSame(
            $this->configVersion,
            $this->subject->getConfigVersion()
        );
    }

    public function testGetConfigurationReturnsValus(): void
    {
        $this->assertSame(
            $this->configuration,
            $this->subject->getConfiguration()
        );
    }
}
