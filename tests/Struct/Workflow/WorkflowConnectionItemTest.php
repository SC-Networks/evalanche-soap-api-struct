<?php declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

use Scn\EvalancheSoapStruct\StructTestCase;

class WorkflowConnectionItemTest extends StructTestCase
{

    /**
     * @var WorkflowConnectionItem
     */
    private $subject;

    /**
     * @var string $source
     */
    private $source = 'my source';
    /**
     * @var string $target
     */
    private $target = 'my target';
    /**
     * @var string $type
     */
    private $type = 'my type';

    public function setUp()
    {
        $this->subject = new WorkflowConnectionItem(
            $this->source,
            $this->target,
            $this->type
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
            ['getSource', $this->source],
            ['getTarget', $this->target],
            ['getType', $this->type],
        ];
    }
}
