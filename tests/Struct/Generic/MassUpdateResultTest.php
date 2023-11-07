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

    public function testGetUpdatedCanReturnInstanceOfHashMap(): void
    {
        self::assertInstanceOf(HashMapInterface::class, $this->subject->getUpdated());
    }

    public function testGetCreatedReturnInstanceOfHashMap(): void
    {
        self::assertInstanceOf(HashMapInterface::class, $this->subject->getCreated());
    }

    public function testGetIgnoredCanReturnArray(): void
    {
        self::assertCount(2, $this->subject->getIgnored());
        self::assertSame([
            'some string',
            'some other string'
        ], $this->subject->getIgnored());
    }

    public function testGetErrorCanReturnArray(): void
    {
        self::assertCount(2, $this->subject->getError());
        self::assertSame([
            1,
            4
        ], $this->subject->getError());
    }
}
