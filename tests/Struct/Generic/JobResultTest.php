<?php

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\StructTestCase;

class JobResultTest extends StructTestCase
{
    private JobResult $subject;

    public function setUp(): void
    {
        $this->subject = new JobResult(
            'some id',
            4,
            'some description',
            'some namespace',
            'some method',
            4,
            76,
            [
                $this->getMockBuilder(HashMapInterface::class)->getMock(),
                $this->getMockBuilder(HashMapInterface::class)->getMock()
            ],
            500,
            1000
        );
    }

    public function testGetIdCanReturnString(): void
    {
        self::assertSame('some id', $this->subject->getId());
    }

    public function testGetStatusCanReturnInt(): void
    {
        self::assertSame(4, $this->subject->getStatus());
    }

    public function testGetStatusDescriptionCanReturnString(): void
    {
        self::assertSame('some description', $this->subject->getStatusDescription());
    }

    public function testGetNamespaceCanReturnString(): void
    {
        self::assertSame('some namespace', $this->subject->getNamespace());
    }

    public function testGetMethodCanReturnString(): void
    {
        self::assertSame('some method', $this->subject->getMethod());
    }

    public function testGetResourceIdCanReturnInt(): void
    {
        self::assertSame(4, $this->subject->getResourceId());
    }

    public function testGetResultChunksCanReturnInt(): void
    {
        self::assertSame(76, $this->subject->getResultChunks());
    }

    public function testGetResultCanReturnArrayOfHashMapInterface(): void
    {
        self::assertCount(2, $this->subject->getResult());
        self::assertContainsOnlyInstancesOf(HashMapInterface::class, $this->subject->getResult());
    }

    public function testGetChunksLeftCanReturnInt(): void
    {
        self::assertSame(500, $this->subject->getChunksLeft());
    }

    public function testGetResultSizeCanReturnInt(): void
    {
        self::assertSame(1000, $this->subject->getResultSize());
    }
}
