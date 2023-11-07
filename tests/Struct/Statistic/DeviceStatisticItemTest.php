<?php

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class DeviceStatisticItemTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
class DeviceStatisticItemTest extends StructTestCase
{
    /**
     * @var DeviceStatisticItem
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new DeviceStatisticItem(
            'some description',
            444
        );
    }

    public function testGetDescriptionCanReturnString(): void
    {
        self::assertSame('some description', $this->subject->getDescription());
    }

    public function testGetCountCanReturnInt(): void
    {
        self::assertSame(444, $this->subject->getCount());
    }
}
