<?php

namespace Scn\EvalancheSoapStruct\Struct\Profile;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class ProfileGroupScoreTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Profile
 */
class ProfileGroupScoreTest extends StructTestCase
{
    /**
     * @var ProfileGroupScore
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new ProfileGroupScore(
            123,
            567,
            'some group name',
            123,
            3456
        );
    }

    public function testGetProfileIdCanReturnInt(): void
    {
        self::assertSame(123, $this->subject->getProfileId());
    }

    public function testGetGroupIdCanReturnInt(): void
    {
        self::assertSame(567, $this->subject->getGroupId());
    }

    public function testGetGroupNameCanReturnString(): void
    {
        self::assertSame('some group name', $this->subject->getGroupName());
    }

    public function testGetActivityScoreCanReturnInt(): void
    {
        self::assertSame(123, $this->subject->getActivityScore());
    }

    public function testGetProfileScoreCanReturnInt(): void
    {
        self::assertSame(3456, $this->subject->getProfileScore());
    }
}
