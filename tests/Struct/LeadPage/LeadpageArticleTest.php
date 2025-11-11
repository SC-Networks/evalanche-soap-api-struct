<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\LeadPage;

use PHPUnit\Framework\TestCase;

class LeadpageArticleTest extends TestCase
{
    /**
     * @var LeadpageArticle
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new LeadpageArticle(
            1,
            2,
            3,
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

    public function testLandingPagePresetIdCanReturnInt(): void
    {
        self::assertSame(7, $this->subject->getLandingpagePresetId());
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
