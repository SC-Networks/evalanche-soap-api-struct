<?php

namespace Scn\EvalancheSoapStruct\Struct\Blacklist;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class BlackListTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Blacklist
 */
class BlackListTest extends StructTestCase
{
    /**
     * @var BlackList
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new BlackList(
            123,
            [
                $this->getMockBuilder(BlackListItemInterface::class)->getMock(),
                $this->getMockBuilder(BlackListItemInterface::class)->getMock(),
            ]
        );
    }

    public function testGetMandatorIdCanReturnInteger()
    {
        $this->assertSame(123, $this->subject->getMandatorId());
    }

    public function testGetItemsCanReturnArrayOfBlackListItem()
    {
        $this->assertCount(2, $this->subject->getItems());
        $this->assertContainsOnlyInstancesOf(
            BlackListItemInterface::class,
            $this->subject->getItems()
        );
    }
}
