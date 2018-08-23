<?php

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class CategoryInformationTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class CategoryInformationTest extends StructTestCase
{
    /**
     * @var CategoryInformation
     */
    private $subject;

    public function setUp()
    {
        $this->subject = new CategoryInformation(
            777,
            'some name'
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
}
