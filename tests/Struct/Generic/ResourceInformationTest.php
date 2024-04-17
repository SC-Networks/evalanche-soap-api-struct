<?php

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\StructTestCase;

class ResourceInformationTest extends StructTestCase
{
    private ResourceInformation $subject;

    public function setUp(): void
    {
        $this->subject = new ResourceInformation(
            123,
            'some name',
            'some url',
            5,
            9,
            989,
            44455
        );
    }

    public function testGetIdCanReturnInt(): void
    {
        self::assertSame(123, $this->subject->getId());
    }

    public function testGetNameCanReturnString(): void
    {
        self::assertSame('some name', $this->subject->getName());
    }

    public function testGetUrlCanReturnString(): void
    {
        self::assertSame('some url', $this->subject->getUrl());
    }

    public function testGetTypeIdCanReturnInt(): void
    {
        self::assertSame(5, $this->subject->getTypeId());
    }

    public function testGetFolderIdCanReturnInt(): void
    {
        self::assertSame(9, $this->subject->getFolderId());
    }

    public function testGetMandatorIdCanReturnInt(): void
    {
        self::assertSame(989, $this->subject->getMandatorId());
    }

    public function testGetLastModifiedByIdCanReturnInt(): void
    {
        self::assertSame(44455, $this->subject->getLastModified());
    }
}
