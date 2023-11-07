<?php

namespace Scn\EvalancheSoapStruct\Struct\Container;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class ContainerAttributeTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Container
 */
class ContainerAttributeTest extends StructTestCase
{
    /**
     * @var ContainerAttribute
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new ContainerAttribute(
            123,
            'some name',
            'some label',
            456,
            789,
            'some help text',
            'some input help text',
            true,
            false,
            'some replacement',
            true
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

    public function testGetTypeIdCanReturnInt(): void
    {
        self::assertSame(456, $this->subject->getTypeId());
    }

    public function testGetGroupIdCanReturnInt(): void
    {
        self::assertSame(789, $this->subject->getGroupId());
    }

    public function testGetHelpTextCanReturnString(): void
    {
        self::assertSame('some help text', $this->subject->getHelpText());
    }

    public function testGetInputHelpTextCanReturnString(): void
    {
        self::assertSame('some input help text', $this->subject->getInputHelpText());
    }

    public function testGetMandatoryCanReturnBool(): void
    {
        self::assertTrue($this->subject->getMandatory());
    }

    public function testGetVisibleCanReturnBool(): void
    {
        self::assertFalse($this->subject->getVisible());
    }

    public function testGetReplacementVariableCanReturnString(): void
    {
        self::assertSame('some replacement', $this->subject->getReplacementVariable());
    }

    public function testGetAllowOptionsCanReturnBool(): void
    {
        self::assertTrue($this->subject->getAllowOptions());
    }
}
