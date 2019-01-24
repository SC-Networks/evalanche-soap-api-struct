<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

use Scn\EvalancheSoapStruct\StructTestCase;

class WorkflowStateItemTest extends StructTestCase
{

    /**
     * @var WorkflowStateItem
     */
    private $subject;

    /**
     * @var string $id
     */
    private $id = 'my id';

    /**
     * @var int $type
     */
    private $type = 42;

    /**
     * @var WorkflowStateUiItemInterface $ui
     */
    private $ui;

    public function setUp()
    {
        $this->ui = $this->getMockBuilder(WorkflowStateUiItemInterface::class)->getMock();
        $this->subject = new WorkflowStateItem(
            $this->id,
            $this->type,
            $this->ui
        );
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
            ['getId', $this->id],
            ['getType', $this->type],
        ];
    }

    public function testGetUiReturnsObject()
    {
        $this->assertSame(
            $this->ui,
            $this->subject->getUi()
        );
    }
}
