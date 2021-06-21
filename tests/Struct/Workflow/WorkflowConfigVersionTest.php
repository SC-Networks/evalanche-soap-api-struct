<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

use Scn\EvalancheSoapStruct\StructTestCase;

class WorkflowConfigVersionTest extends StructTestCase
{
    /** @var string */
    private $configVersion = 'some-config-version';
    
    /** @var int */
    private $createDate = 1234567;
    
    /** @var bool */
    private $latest = true;
    
    /** @var WorkflowConfigVersion */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new WorkflowConfigVersion(
            $this->configVersion,
            $this->createDate,
            $this->latest
        );
    }
    
    public function testGetConfigVersionReturnsValue(): void
    {
        $this->assertSame(
            $this->configVersion,
            $this->subject->getConfigVersion()
        );
    }
    
    public function testGetCreateDateReturnsValue(): void
    {
        $this->assertSame(
            $this->createDate,
            $this->subject->getCreateDate()
        );
    }
    
    public function testGetLatestReturnsTrue(): void
    {
        $this->assertTrue(
            $this->subject->getLatest()
        );
    }
}
