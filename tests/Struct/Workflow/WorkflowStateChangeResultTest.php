<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

use Scn\EvalancheSoapStruct\StructTestCase;

class WorkflowStateChangeResultTest extends StructTestCase
{
    private bool $stateChangeSuccessful = true;

    /** @var string[] */
    private array $errorList = ['some-list'];
    
    private WorkflowStateChangeResult $subject;

    public function setUp(): void
    {
        $this->subject = new WorkflowStateChangeResult(
            $this->stateChangeSuccessful,
            $this->errorList
        );
    }
    
    public function testGetStatChangeResultReturnsValue(): void
    {
        self::assertTrue($this->subject->getStateChangeResultSuccessful());
    }
    
    public function testGetErrorListReturnsValue(): void
    {
        self::assertSame($this->errorList, $this->subject->getErrorList());
    }
}
