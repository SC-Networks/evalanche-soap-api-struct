<?php

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\StructTestCase;

class FolderInformationTest extends StructTestCase
{
    private FolderInformation $subject;

    public function setUp(): void
    {
        $this->subject = new FolderInformation(
            777,
            'some name',
            9999
        );
    }

    public function testGetIdCanReturnInt(): void
    {
        self::assertSame(777, $this->subject->getId());
    }

    public function testGetNameCanReturnString(): void
    {
        self::assertSame('some name', $this->subject->getName());
    }

    public function testGetParentIdCanReturnInt(): void
    {
        self::assertSame(9999, $this->subject->getParentId());
    }

}
