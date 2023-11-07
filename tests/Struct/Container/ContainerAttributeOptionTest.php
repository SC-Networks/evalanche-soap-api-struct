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

    public function setUp(): void
    {
        $this->subject = new ContainerAttributeOption(
            123,
            'some name',
            'some label',
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

    public function testGetLabelCanReturnString(): void
    {
        self::assertSame('some label', $this->subject->getLabel());
    }

    public function testGetSortOrderCanReturnInt(): void
    {
        self::assertSame(1234, $this->subject->getOrder());
    }
}
