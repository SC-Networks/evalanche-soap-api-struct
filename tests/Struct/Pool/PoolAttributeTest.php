<?php

namespace Scn\EvalancheSoapStruct\Struct\Pool;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class PoolAttributeTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Pool
 */
class PoolAttributeTest extends StructTestCase
{
    /**
     * @var PoolAttribute
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new PoolAttribute(
            55,
            666,
            'some name',
            'some label',
            [
                $this->getMockBuilder(PoolAttributeOptionInterface::class)->getMock(),
                $this->getMockBuilder(PoolAttributeOptionInterface::class)->getMock(),
            ],
            true,
            true
        );
    }

    public function testGetIdCanReturnInt()
    {
        $this->assertSame(55, $this->subject->getId());
    }

    public function testGetTypeIdCanReturnInt()
    {
        $this->assertSame(666, $this->subject->getTypeId());
    }

    public function testGetNameCanReturnString()
    {
        $this->assertSame('some name', $this->subject->getName());
    }

    public function testGetLabelCanReturnString()
    {
        $this->assertSame('some label', $this->subject->getLabel());
    }

    public function testGetOptionsCanReturnArrayOfPoolAttributeOptions()
    {
        $this->assertContainsOnlyInstancesOf(
            PoolAttributeOptionInterface::class,
            $this->subject->getOptions()
        );
    }

    public function testHasOptionsCanReturnBool()
    {
        $this->assertTrue($this->subject->hasOptions());
    }

    public function testAddOptionsCanReturnBool()
    {
        $this->assertTrue($this->subject->addOptions());
    }
}
