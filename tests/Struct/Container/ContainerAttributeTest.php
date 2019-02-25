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

    public function testGetTypeIdCanReturnInt()
    {
        $this->assertSame(456, $this->subject->getTypeId());
    }

    public function testGetGroupIdCanReturnInt()
    {
        $this->assertSame(789, $this->subject->getGroupId());
    }

    public function testGetHelpTextCanReturnString()
    {
        $this->assertSame('some help text', $this->subject->getHelpText());
    }

    public function testGetInputHelpTextCanReturnString()
    {
        $this->assertSame('some input help text', $this->subject->getInputHelpText());
    }

    public function testGetMandatoryCanReturnBool()
    {
        $this->assertTrue($this->subject->getMandatory());
    }

    public function testGetVisibleCanReturnBool()
    {
        $this->assertFalse($this->subject->getVisible());
    }

    public function testGetReplacementVariableCanReturnString()
    {
        $this->assertSame('some replacement', $this->subject->getReplacementVariable());
    }

    public function testGetAllowOptionsCanReturnBool()
    {
        $this->assertTrue($this->subject->getAllowOptions());
    }
}
