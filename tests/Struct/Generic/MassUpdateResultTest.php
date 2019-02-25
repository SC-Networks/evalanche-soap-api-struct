<?php

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class MassUpdateResultTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class MassUpdateResultTest extends StructTestCase
{
    /**
     * @var MassUpdateResult
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new MassUpdateResult(
            $this->getMockBuilder(HashMapInterface::class)->getMock(),
            $this->getMockBuilder(HashMapInterface::class)->getMock(),
            [
                'some string',
                'some other string'
            ],
            [
                1,
                4
            ]
        );
    }

    public function testGetUpdatedCanReturnInstanceOfHashMap()
    {
        $this->assertInstanceOf(
            HashMapInterface::class,
            $this->subject->getUpdated()
        );
    }

    public function testGetCreatedReturnInstanceOfHashMap()
    {
        $this->assertInstanceOf(
            HashMapInterface::class,
            $this->subject->getCreated()
        );
    }

    public function testGetIgnoredCanReturnArray()
    {
        $this->assertCount(2, $this->subject->getIgnored());
        $this->assertSame(
            [
                'some string',
                'some other string'
            ],
            $this->subject->getIgnored()
        );
    }

    public function testGetErrorCanReturnArray()
    {
        $this->assertCount(2, $this->subject->getError());
        $this->assertSame(
            [
                1,
                4
            ],
            $this->subject->getError()
        );
    }
}
