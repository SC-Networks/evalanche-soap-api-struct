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

    public function testGetLinksCanReturnArrayOfLinkStatistic(): void
    {
        self::assertCount(4, $this->subject->getLinks());
        self::assertContainsOnlyInstancesOf(LinkStatisticItemInterface::class, $this->subject->getLinks());
    }

    public function testGetArticlesCanReturnArrayOfArticleStatisticItem(): void
    {
        self::assertCount(4, $this->subject->getArticles());
        self::assertContainsOnlyInstancesOf(ArticleStatisticItemInterface::class, $this->subject->getArticles());
    }

    public function testGetMediaCanReturnArrayOfMediaStatisticItem(): void
    {
        self::assertCount(2, $this->subject->getMedia());
        self::assertContainsOnlyInstancesOf(MediaStatisticItemInterface::class, $this->subject->getMedia());
    }

    public function testGetUniqueClickCountCanReturnInt(): void
    {
        self::assertSame(12, $this->subject->getUniqueClickCount());
    }

    public function testGetClickCountCanReturnInt(): void
    {
        self::assertSame(44, $this->subject->getClickCount());
    }

    public function testGetUniqueImpressionCountCanReturnInt(): void
    {
        self::assertSame(55, $this->subject->getUniqueImpressionCount());
    }

    public function testGetImpressionCountCanReturnInt(): void
    {
        self::assertSame(55, $this->subject->getImpressionCount());
    }

    public function testGetUnsubscribeCountCanReturnInt(): void
    {
        self::assertSame(456, $this->subject->getUnSubscribeCount());
    }

    public function testGetSoftBounceCountCanReturnInt(): void
    {
        self::assertSame(56, $this->subject->getSoftBounceCount());
    }


    public function testGetAddressesCanReturnInt(): void
    {
        self::assertSame(5, $this->subject->getAddresses());
    }

    public function testGetRecipientsCanReturnInt(): void
    {
        self::assertSame(9, $this->subject->getRecipients());
    }

    public function testGetDuplicateCountCanReturnInt(): void
    {
        self::assertSame(23, $this->subject->getDuplicateCount());
    }

    public function testGetBlackListedCountCanReturnInt(): void
    {
        self::assertSame(55, $this->subject->getBlackListedCount());
    }

    public function testGetRobinsonListedCountCanReturnInt(): void
    {
        self::assertSame(456, $this->subject->getRobinsonListedCount());
    }

    public function testGetHardBounceCountCanReturnInt(): void
    {
        self::assertSame(1456, $this->subject->getHardBounceCount());
    }
}
