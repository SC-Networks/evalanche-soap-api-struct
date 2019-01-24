<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

use Scn\EvalancheSoapStruct\StructTestCase;

class WorkflowStateUiItemTest extends StructTestCase
{

    /**
     * @var WorkflowStateUiItem
     */
    private $subject;

    /**
     * @var int
     */
    private $x = 47;

    /**
     * @var int
     */
    private $y = 11;

    public function setUp()
    {
        $this->subject = new WorkflowStateUiItem($this->x, $this->y);
    }

    /**
     * @dataProvider getterDataProvider
     * @param $method
     * @param $expectedResult
     */
    public function testGetterReturnsValue($method, $expectedResult)
    {
        $this->assertSame(
            $expectedResult,
            $this->subject->$method()
        );
    }

    public function getterDataProvider(): array
    {
        return [
            ['getX', $this->x],
            ['getY', $this->y],
        ];
    }
}
