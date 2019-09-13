<?php

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class FormatStatisticItemTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
class FormatStatisticItemTest extends StructTestCase
{
    /**
     * @var FormatStatisticItem
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new FormatStatisticItem(
            5,
            6,
            7.4,
            3.5,
            4.9,
            1.0
        );
    }

    public function testGetClickCountCanReturnInt()
    {
        $this->assertSame(5, $this->subject->getClickCount());
    }

    public function testGetUniqueClickCountCanReturnInt()
    {
        $this->assertSame(6, $this->subject->getUniqueClickCount());
    }

    public function testGetClickRateCanReturnFloat()
    {
        $this->assertSame(7.4, $this->subject->getClickRate());
    }

    public function testGetClickRateRelativeCanReturnFloat()
    {
        $this->assertSame(3.5, $this->subject->getClickRateRelative());
    }

    public function testGetMultipleClickRateCanReturnFloat()
    {
        $this->assertSame(4.9, $this->subject->getMultipleClickRate());
    }

    public function testGetMultipleClickRateRelativeCanReturnFloat()
    {
        $this->assertSame(1.0, $this->subject->getMultipleClickRateRelative());
    }
}
