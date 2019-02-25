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
            1531382666,
            95959,
            123
        );
    }

    public function testGetIdCanReturnInt()
    {
        $this->assertSame(444, $this->subject->getId());
    }

    public function testGetScoringGroupIdCanReturnInt()
    {
        $this->assertSame(555, $this->subject->getScoringGroupId());
    }

    public function testGetScoringTypeIdCanReturnInt()
    {
        $this->assertSame(666, $this->subject->getScoringTypeId());
    }

    public function testGetTimestampCanReturnInt()
    {
        $this->assertSame(1531382666, $this->subject->getTimestamp());
    }

    public function testGetScoreCanReturnInt()
    {
        $this->assertSame(95959, $this->subject->getScore());
    }

    public function testGetResourceIdCanReturnInt()
    {
        $this->assertSame(123, $this->subject->getResourceId());
    }
}
