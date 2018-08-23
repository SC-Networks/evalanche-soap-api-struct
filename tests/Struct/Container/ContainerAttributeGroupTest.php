<?php

namespace Scn\EvalancheSoapStruct\Struct\Container;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class ContainerAttributeGroupTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class ContainerAttributeGroupTest extends StructTestCase
{
    /**
     * @var ContainerAttributeGroup
     */
    private $subject;

    public function setUp()
    {
        $this->subject = new ContainerAttributeGroup(
            123,
            'some name',
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

    public function testGetSortOrderCanReturnInt()
    {
        $this->assertSame(1234, $this->subject->getSortOrder());
    }
}
