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

    public function testGetIdCanReturnInt(): void
    {
        self::assertSame(55, $this->subject->getId());
    }

    public function testGetTypeIdCanReturnInt(): void
    {
        self::assertSame(666, $this->subject->getTypeId());
    }

    public function testGetNameCanReturnString(): void
    {
        self::assertSame('some name', $this->subject->getName());
    }

    public function testGetLabelCanReturnString(): void
    {
        self::assertSame('some label', $this->subject->getLabel());
    }

    public function testGetOptionsCanReturnArrayOfPoolAttributeOptions(): void
    {
        self::assertContainsOnlyInstancesOf(PoolAttributeOptionInterface::class, $this->subject->getOptions());
    }

    public function testHasOptionsCanReturnBool(): void
    {
        self::assertTrue($this->subject->hasOptions());
    }

    public function testAddOptionsCanReturnBool(): void
    {
        self::assertTrue($this->subject->addOptions());
    }
}
