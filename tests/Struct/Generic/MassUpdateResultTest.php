<?php

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use PHPUnit\Framework\Attributes\Test;
use Scn\EvalancheSoapStruct\Struct\Exception\StructNotHydratedException;
use Scn\EvalancheSoapStruct\StructTestCase;

class MassUpdateResultTest extends StructTestCase
{
    private MassUpdateResult $subject;

    public function setUp(): void
    {
        $this->subject = new MassUpdateResult(
            $this->createStub(HashMapInterface::class),
            $this->createStub(HashMapInterface::class),
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

    #[Test]
    public function getUpdatedThrowsIfNotSet(): void
    {
        self::expectException(StructNotHydratedException::class);

        (new MassUpdateResult())->getUpdated();
    }

    #[Test]
    public function getCreatedThrowsIfNotSet(): void
    {
        self::expectException(StructNotHydratedException::class);

        (new MassUpdateResult())->getCreated();
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
