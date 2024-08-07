<?php

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class MediaStatisticItemTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
class MediaStatisticItemTest extends StructTestCase
{
    /**
     * @var MediaStatisticItem
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new MediaStatisticItem(
            'some name',
            444,
            666
        );
    }

    public function testGetNameCanReturnString(): void
    {
        self::assertSame('some name', $this->subject->getName());
    }

    public function testGetClickCountCanReturnInt(): void
    {
        self::assertSame(444, $this->subject->getClickCount());
    }

    public function testGetUniqueClickCountCanReturnInt(): void
    {
        self::assertSame(666, $this->subject->getUniqueClickCount());
    }
}
