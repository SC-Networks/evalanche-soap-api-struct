<?php

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class MailingStatisticTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
class MailingStatisticTest extends StructTestCase
{
    /**
     * @var MailingStatistic
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new MailingStatistic(
            5,
            9,
            23,
            55,
            456,
            1456,
            56,
            456,
            55,
            55,
            44,
            12,
            [
                $this->getMockBuilder(MediaStatisticItemInterface::class)->getMock(),
                $this->getMockBuilder(MediaStatisticItemInterface::class)->getMock(),
            ],
            [
                $this->getMockBuilder(ArticleStatisticItemInterface::class)->getMock(),
                $this->getMockBuilder(ArticleStatisticItemInterface::class)->getMock(),
                $this->getMockBuilder(ArticleStatisticItemInterface::class)->getMock(),
                $this->getMockBuilder(ArticleStatisticItemInterface::class)->getMock(),
            ],
            [
                $this->getMockBuilder(LinkStatisticItemInterface::class)->getMock(),
                $this->getMockBuilder(LinkStatisticItemInterface::class)->getMock(),
                $this->getMockBuilder(LinkStatisticItemInterface::class)->getMock(),
                $this->getMockBuilder(LinkStatisticItemInterface::class)->getMock(),
            ]
        );
    }

    public function testGetLinksCanReturnArrayOfLinkStatistic()
    {
        $this->assertCount(4, $this->subject->getLinks());
        $this->assertContainsOnlyInstancesOf(
            LinkStatisticItemInterface::class,
            $this->subject->getLinks()
        );
    }

    public function testGetArticlesCanReturnArrayOfArticleStatisticItem()
    {
        $this->assertCount(4, $this->subject->getArticles());
        $this->assertContainsOnlyInstancesOf(
            ArticleStatisticItemInterface::class,
            $this->subject->getArticles()
        );
    }

    public function testGetMediaCanReturnArrayOfMediaStatisticItem()
    {
        $this->assertCount(2, $this->subject->getMedia());
        $this->assertContainsOnlyInstancesOf(
            MediaStatisticItemInterface::class,
            $this->subject->getMedia()
        );
    }

    public function testGetUniqueClickCountCanReturnInt()
    {
        $this->assertSame(12, $this->subject->getUniqueClickCount());
    }

    public function testGetClickCountCanReturnInt()
    {
        $this->assertSame(44, $this->subject->getClickCount());
    }

    public function testGetUniqueImpressionCountCanReturnInt()
    {
        $this->assertSame(55, $this->subject->getUniqueImpressionCount());
    }

    public function testGetImpressionCountCanReturnInt()
    {
        $this->assertSame(55, $this->subject->getImpressionCount());
    }

    public function testGetUnsubscribeCountCanReturnInt()
    {
        $this->assertSame(456, $this->subject->getUnSubscribeCount());
    }

    public function testGetSoftBounceCountCanReturnInt()
    {
        $this->assertSame(56, $this->subject->getSoftBounceCount());
    }


    public function testGetAddressesCanReturnInt()
    {
        $this->assertSame(5, $this->subject->getAddresses());
    }

    public function testGetRecipientsCanReturnInt()
    {
        $this->assertSame(9, $this->subject->getRecipients());
    }

    public function testGetDuplicateCountCanReturnInt()
    {
        $this->assertSame(23, $this->subject->getDuplicateCount());
    }

    public function testGetBlackListedCountCanReturnInt()
    {
        $this->assertSame(55, $this->subject->getBlackListedCount());
    }

    public function testGetRobinsonListedCountCanReturnInt()
    {
        $this->assertSame(456, $this->subject->getRobinsonListedCount());
    }

    public function testGetHardBounceCountCanReturnInt()
    {
        $this->assertSame(1456, $this->subject->getHardBounceCount());
    }
}
