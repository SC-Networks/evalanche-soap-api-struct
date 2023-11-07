<?php

namespace Scn\EvalancheSoapStruct\Struct\Profile;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class ProfileActivityScoreTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Profile
 */
class ProfileActivityScoreTest extends StructTestCase
{
    /**
     * @var ProfileActivityScore
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new ProfileActivityScore(
            444,
            555,
            666,
            1_531_382_666,
            95959,
            123
        );
    }

    public function testGetIdCanReturnInt(): void
    {
        self::assertSame(444, $this->subject->getId());
    }

    public function testGetScoringGroupIdCanReturnInt(): void
    {
        self::assertSame(555, $this->subject->getScoringGroupId());
    }

    public function testGetScoringTypeIdCanReturnInt(): void
    {
        self::assertSame(666, $this->subject->getScoringTypeId());
    }

    public function testGetTimestampCanReturnInt(): void
    {
        self::assertSame(1_531_382_666, $this->subject->getTimestamp());
    }

    public function testGetScoreCanReturnInt(): void
    {
        self::assertSame(95959, $this->subject->getScore());
    }

    public function testGetResourceIdCanReturnInt(): void
    {
        self::assertSame(123, $this->subject->getResourceId());
    }
}
