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

    public function testGetIdCanReturnInt()
    {
        $this->assertSame(123, $this->subject->getId());
    }

    public function testGetReferenceIdCanReturnInt()
    {
        $this->assertSame(34, $this->subject->getReferenceId());
    }

    public function testGetNameCanReturnString()
    {
        $this->assertSame('some name', $this->subject->getName());
    }

    public function testGetOverallCanReturnInstanceOfFormatStatisticItemInterface()
    {
        $this->assertInstanceOf(
            FormatStatisticItemInterface::class,
            $this->subject->getOverall()
        );
    }

    public function testGetLandingpageCanReturnInstanceOfFormatStatisticItemInterface()
    {
        $this->assertInstanceOf(
            FormatStatisticItemInterface::class,
            $this->subject->getLandingPage()
        );
    }

    public function testGetPrintCanReturnInstanceOfFormatStatisticItemInterface()
    {
        $this->assertInstanceOf(
            FormatStatisticItemInterface::class,
            $this->subject->getPrint()
        );
    }

    public function testGetGetVoiceCanReturnInstanceOfFormatStatisticItemInterface()
    {
        $this->assertInstanceOf(
            FormatStatisticItemInterface::class,
            $this->subject->getVoice()
        );
    }

    public function testGetSocialSharingCanReturnInstanceOfFormatStatisticItemInterface()
    {
        $this->assertInstanceOf(
            FormatStatisticItemInterface::class,
            $this->subject->getSocialSharing()
        );
    }

    public function testGetLinksCanReturnArrayOfLinkStatisticItem()
    {
        $this->assertCount(3, $this->subject->getLinks());
        $this->assertContainsOnlyInstancesOf(
            LinkStatisticItemInterface::class,
            $this->subject->getLinks()
        );
    }
}
