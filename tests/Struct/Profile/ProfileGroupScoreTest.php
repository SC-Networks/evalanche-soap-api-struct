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

    public function testGetProfileIdCanReturnInt()
    {
        $this->assertSame(123, $this->subject->getProfileId());
    }

    public function testGetGroupIdCanReturnInt()
    {
        $this->assertSame(567, $this->subject->getGroupId());
    }

    public function testGetGroupNameCanReturnString()
    {
        $this->assertSame('some group name', $this->subject->getGroupName());
    }

    public function testGetActivityScoreCanReturnInt()
    {
        $this->assertSame(123, $this->subject->getActivityScore());
    }

    public function testGetProfileScoreCanReturnInt()
    {
        $this->assertSame(3456, $this->subject->getProfileScore());
    }
}
