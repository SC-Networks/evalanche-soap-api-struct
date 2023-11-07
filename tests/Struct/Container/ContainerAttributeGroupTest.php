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

    public function setUp(): void
    {
        $this->subject = new ContainerAttributeGroup(
            123,
            'some name',
            1234
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

    public function testGetSortOrderCanReturnInt(): void
    {
        self::assertSame(1234, $this->subject->getSortOrder());
    }
}
