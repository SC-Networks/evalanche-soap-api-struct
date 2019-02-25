<?php

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class BrowserStatisticItemTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
class BrowserStatisticItemTest extends StructTestCase
{
    /**
     * @var BrowserStatisticItem
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new BrowserStatisticItem(
            'some description',
            'some version',
            234
        );
    }

    public function testGetDescriptionCanReturnString()
    {
        $this->assertSame('some description', $this->subject->getDescription());
    }

    public function testGetVersionCanReturnString()
    {
        $this->assertSame('some version', $this->subject->getVersion());
    }

    public function testGetCountCanReturnInt()
    {
        $this->assertSame(234, $this->subject->getCount());
    }
}
