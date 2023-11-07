<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

use Scn\EvalancheSoapStruct\StructTestCase;

class WorkflowStateChangeResultTest extends StructTestCase
{
    /** @var bool */
    private $stateChangeSuccessful = true;

    /** @var string[] */
    private $errorList = ['some-list'];
    
    /** @var WorkflowStateChangeResult */
    private $subject;

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
