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

    public function testGetMandatorIdCanReturnInteger(): void
    {
        self::assertSame(123, $this->subject->getMandatorId());
    }

    public function testGetItemsCanReturnArrayOfBlackListItem(): void
    {
        self::assertCount(2, $this->subject->getItems());
        self::assertContainsOnlyInstancesOf(BlackListItemInterface::class, $this->subject->getItems());
    }
}
