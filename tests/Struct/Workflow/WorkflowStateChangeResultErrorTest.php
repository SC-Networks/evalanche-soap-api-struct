<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

use Scn\EvalancheSoapStruct\StructTestCase;

class WorkflowStateChangeResultErrorTest extends StructTestCase
{
    private string $node = 'some-node';

    private string $type = 'some-type';
    
    private string $param = 'some-param';
    
    private WorkflowStateChangeResultError $subject;
    
    public function setUp(): void
    {
        $this->subject = new WorkflowStateChangeResultError(
            $this->type,
            $this->node,
            $this->param
        );
    }
    
    public function testGetTypeReturnsValue(): void
    {
        self::assertSame($this->type, $this->subject->getType());
    }

    public function testGetNodeReturnsValue(): void
    {
        self::assertSame($this->node, $this->subject->getNode());
    }
    
    public function testGetParamReturnsValue(): void
    {
        self::assertSame($this->param, $this->subject->getParam());
    }
}
