<?php

namespace Scn\EvalancheSoapStruct\Struct\Container;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class ContainerAttributeOptionTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class ContainerAttributeOptionTest extends StructTestCase
{
    /**
     * @var ContainerAttributeOption
     */
    private $subject;

    public function setUp()
    {
        $this->subject = new ContainerAttributeOption(
            123,
            'some name',
            'some label',
            1234
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

    public function testGetLabelCanReturnString()
    {
        $this->assertSame('some label', $this->subject->getLabel());
    }

    public function testGetSortOrderCanReturnInt()
    {
        $this->assertSame(1234, $this->subject->getOrder());
    }
}
