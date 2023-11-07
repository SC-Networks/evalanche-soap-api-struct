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

    public function testGetIdCanReturnInt(): void
    {
        self::assertSame(123, $this->subject->getId());
    }

    public function testGetUrlCanReturnString(): void
    {
        self::assertSame('some url', $this->subject->getUrl());
    }

    public function testGetNameCanReturnString(): void
    {
        self::assertSame('some name', $this->subject->getName());
    }

    public function testGetClickCountCanReturnInt(): void
    {
        self::assertSame(120, $this->subject->getClickCount());
    }

    public function testGetUniqueClickCountCanReturnInt(): void
    {
        self::assertSame(555, $this->subject->getUniqueClickCount());
    }
}
