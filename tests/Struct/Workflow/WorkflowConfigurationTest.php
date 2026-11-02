<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

use Scn\EvalancheSoapStruct\StructTestCase;

class WorkflowConfigurationTest extends StructTestCase
{
    private string $configVersion = 'some-config-version';
    
    private string $configuration = 'some-configuration';
    
    private WorkflowConfiguration $subject;
    
    public function setUp(): void
    {
        $this->subject = new WorkflowConfiguration(
            $this->configVersion,
            $this->configuration
        );
    }
    
    public function testGetConfigVersionReturnsValue(): void
    {
        self::assertSame($this->configVersion, $this->subject->getConfigVersion());
    }

    public function testGetConfigurationReturnsValus(): void
    {
        self::assertSame($this->configuration, $this->subject->getConfiguration());
    }
}
