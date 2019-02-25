<?php

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class LinkStatisticItemTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
class LinkStatisticItemTest extends StructTestCase
{
    /**
     * @var LinkStatisticItem
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new LinkStatisticItem(
            123,
            'some url',
            'some name',
            120,
            555
        );
    }

    public function testGetIdCanReturnInt()
    {
        $this->assertSame(123, $this->subject->getId());
    }

    public function testGetUrlCanReturnString()
    {
        $this->assertSame('some url', $this->subject->getUrl());
    }

    public function testGetNameCanReturnString()
    {
        $this->assertSame('some name', $this->subject->getName());
    }

    public function testGetClickCountCanReturnInt()
    {
        $this->assertSame(120, $this->subject->getClickCount());
    }

    public function testGetUniqueClickCountCanReturnInt()
    {
        $this->assertSame(555, $this->subject->getUniqueClickCount());
    }
}
