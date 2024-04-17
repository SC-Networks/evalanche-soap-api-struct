<?php

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\StructTestCase;

class JobHandleTest extends StructTestCase
{
    private JobHandle $subject;

    public function setUp(): void
    {
        $this->subject = new JobHandle(
            'some id',
            4,
            'some description',
            'some namespace',
            'some method',
            4,
            76
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
}
