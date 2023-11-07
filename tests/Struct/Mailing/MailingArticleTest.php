<?php

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class MailingArticleTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mailing
 */
class MailingArticleTest extends StructTestCase
{
    /**
     * @var MailingArticle
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new MailingArticle(
            1,
            2,
            3,
            4,
            5,
            6,
            7,
            8,
            9,
            10
        );
    }

    public function testGetIdCanReturnInt(): void
    {
        self::assertSame(1, $this->subject->getId());
    }

    public function testGetArticleIdCanReturnInt(): void
    {
        self::assertSame(2, $this->subject->getArticleId());
    }

    public function testGetTargetGroupIdCanReturnInt(): void
    {
        self::assertSame(3, $this->subject->getTargetGroupId());
    }

    public function testGetHtmlPresetIdCanReturnInt(): void
    {
        self::assertSame(4, $this->subject->getHtmlPresetId());
    }

    public function testGetTextPresetIdCanReturnInt(): void
    {
        self::assertSame(5, $this->subject->getTextPresetId());
    }

    public function testLandingPagePresetIdCanReturnInt(): void
    {
        self::assertSame(6, $this->subject->getLandingpagePresetId());
    }

    public function testGetPdfPresetIdCanReturnInt(): void
    {
        self::assertSame(7, $this->subject->getPdfPresetId());
    }

    public function testMobilePresetIdCanReturnInt(): void
    {
        self::assertSame(8, $this->subject->getMobilePresetId());
    }

    public function testGetSortPosCanReturnInt(): void
    {
        self::assertSame(9, $this->subject->getSortPos());
    }

    public function testGetSlotCanReturnInt(): void
    {
        self::assertSame(10, $this->subject->getSlot());
    }
}
