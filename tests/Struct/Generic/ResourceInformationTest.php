<?php

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class ResourceInformationTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class ResourceInformationTest extends StructTestCase
{
    /**
     * @var ResourceInformation
     */
    private $subject;

    public function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        $this->subject = new ResourceInformation(
            123,
            'some name',
            'some url',
            5,
            9,
            989
        );
    }

    public function testGetIdCanReturnInt()
    {
        $this->assertSame(123, $this->subject->getId());
    }

    public function testGetNameCanReturnString()
    {
        $this->assertSame('some name', $this->subject->getName());
    }

    public function testGetUrlCanReturnString()
    {
        $this->assertSame('some url', $this->subject->getUrl());
    }

    public function testGetTypeIdCanReturnInt()
    {
        $this->assertSame(5, $this->subject->getTypeId());
    }

    public function testGetCategoryIdCanReturnInt()
    {
        $this->assertSame(9, $this->subject->getCategoryId());
    }

    public function testGetCustomerIdCanReturnInt()
    {
        $this->assertSame(989, $this->subject->getCustomerId());
    }
}
