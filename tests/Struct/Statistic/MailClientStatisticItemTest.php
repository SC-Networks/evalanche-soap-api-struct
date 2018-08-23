<?php

namespace Scn\EvalancheSoapStruct\Struct\Statistic;


use Scn\EvalancheSoapStruct\StructTestCase;

class MailClientStatisticItemTest extends StructTestCase
{
    /**
     * @var MailClientStatisticItem
     */
    private $subject;

    public function setUp()
    {
        $this->subject = new MailClientStatisticItem(
            'some description',
            444
        );
    }

    public function testGetDescriptionCanReturnString()
    {
        $this->assertSame('some description', $this->subject->getDescription());
    }

    public function testGetCountCanReturnInt()
    {
        $this->assertSame(444, $this->subject->getCount());
    }
}