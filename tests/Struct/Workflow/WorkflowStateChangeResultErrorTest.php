<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

use Scn\EvalancheSoapStruct\StructTestCase;

class WorkflowStateChangeResultErrorTest extends StructTestCase
{
    /** @var string */
    private $node = 'some-node';

    /** @var string */
    private $type = 'some-type';
    
    /** @var string */
    private $param = 'some-param';
    
    /** @var WorkflowStateChangeResultError */
    private $subject;
    
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
