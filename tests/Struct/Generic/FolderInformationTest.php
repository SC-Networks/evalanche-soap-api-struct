<?php

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class FolderInformationTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class FolderInformationTest extends StructTestCase
{
    /**
     * @var FolderInformation
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new FolderInformation(
            777,
            'some name',
            9999
        );
    }

    public function testGetIdCanReturnInt()
    {
        $this->assertSame(777, $this->subject->getId());
    }

    public function testGetNameCanReturnString()
    {
        $this->assertSame('some name', $this->subject->getName());
    }

    public function testGetParentIdCanReturnInt()
    {
        $this->assertSame(9999, $this->subject->getParentId());
    }

}
