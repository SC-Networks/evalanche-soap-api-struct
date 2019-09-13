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

    public function testGetIdCanReturnInt()
    {
        $this->assertSame(1, $this->subject->getId());
    }

    public function testGetArticleIdCanReturnInt()
    {
        $this->assertSame(2, $this->subject->getArticleId());
    }

    public function testGetTargetGroupIdCanReturnInt()
    {
        $this->assertSame(3, $this->subject->getTargetGroupId());
    }

    public function testGetHtmlPresetIdCanReturnInt()
    {
        $this->assertSame(4, $this->subject->getHtmlPresetId());
    }

    public function testGetTextPresetIdCanReturnInt()
    {
        $this->assertSame(5, $this->subject->getTextPresetId());
    }

    public function testLandingPagePresetIdCanReturnInt()
    {
        $this->assertSame(6, $this->subject->getLandingpagePresetId());
    }

    public function testGetPdfPresetIdCanReturnInt()
    {
        $this->assertSame(7, $this->subject->getPdfPresetId());
    }

    public function testMobilePresetIdCanReturnInt()
    {
        $this->assertSame(8, $this->subject->getMobilePresetId());
    }

    public function testGetSortPosCanReturnInt()
    {
        $this->assertSame(9, $this->subject->getSortPos());
    }

    public function testGetSlotCanReturnInt()
    {
        $this->assertSame(10, $this->subject->getSlot());
    }
}
