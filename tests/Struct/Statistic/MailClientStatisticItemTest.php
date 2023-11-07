<?php

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\StructTestCase;

class MailClientStatisticItemTest extends StructTestCase
{
    /**
     * @var MailClientStatisticItem
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new MailClientStatisticItem(
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
