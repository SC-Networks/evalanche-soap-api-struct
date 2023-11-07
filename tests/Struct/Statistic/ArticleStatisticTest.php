<?php

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\StructTestCase;

class ArticleStatisticTest extends StructTestCase
{
    /**
     * @var ArticleStatistic
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new ArticleStatistic(
            123,
            34,
            'some name',
            $this->getMockBuilder(FormatStatisticItemInterface::class)->getMock(),
            $this->getMockBuilder(FormatStatisticItemInterface::class)->getMock(),
            $this->getMockBuilder(FormatStatisticItemInterface::class)->getMock(),
            $this->getMockBuilder(FormatStatisticItemInterface::class)->getMock(),
            $this->getMockBuilder(FormatStatisticItemInterface::class)->getMock(),
            [
                $this->getMockBuilder(LinkStatisticItemInterface::class)->getMock(),
                $this->getMockBuilder(LinkStatisticItemInterface::class)->getMock(),
                $this->getMockBuilder(LinkStatisticItemInterface::class)->getMock(),
            ]
        );
    }

    public function testGetIdCanReturnInt(): void
    {
        self::assertSame(123, $this->subject->getId());
    }

    public function testGetReferenceIdCanReturnInt(): void
    {
        self::assertSame(34, $this->subject->getReferenceId());
    }

    public function testGetNameCanReturnString(): void
    {
        self::assertSame('some name', $this->subject->getName());
    }

    public function testGetOverallCanReturnInstanceOfFormatStatisticItemInterface(): void
    {
        self::assertInstanceOf(FormatStatisticItemInterface::class, $this->subject->getOverall());
    }

    public function testGetLandingpageCanReturnInstanceOfFormatStatisticItemInterface(): void
    {
        self::assertInstanceOf(FormatStatisticItemInterface::class, $this->subject->getLandingPage());
    }

    public function testGetPrintCanReturnInstanceOfFormatStatisticItemInterface(): void
    {
        self::assertInstanceOf(FormatStatisticItemInterface::class, $this->subject->getPrint());
    }

    public function testGetGetVoiceCanReturnInstanceOfFormatStatisticItemInterface(): void
    {
        self::assertInstanceOf(FormatStatisticItemInterface::class, $this->subject->getVoice());
    }

    public function testGetSocialSharingCanReturnInstanceOfFormatStatisticItemInterface(): void
    {
        self::assertInstanceOf(FormatStatisticItemInterface::class, $this->subject->getSocialSharing());
    }

    public function testGetLinksCanReturnArrayOfLinkStatisticItem(): void
    {
        self::assertCount(3, $this->subject->getLinks());
        self::assertContainsOnlyInstancesOf(LinkStatisticItemInterface::class, $this->subject->getLinks());
    }
}
