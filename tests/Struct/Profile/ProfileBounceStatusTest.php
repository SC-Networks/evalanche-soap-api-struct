<?php

namespace Scn\EvalancheSoapStruct\Struct\Profile;

use PHPUnit\Framework\MockObject\MockObject;
use Scn\EvalancheSoapStruct\Struct\Generic\HashMapInterface;
use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class ProfileBounceStatusTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Profile
 */
class ProfileBounceStatusTest extends StructTestCase
{
    /**
     * @var ProfileBounceStatus
     */
    private $subject;

    /**
     * @var HashMapInterface|MockObject
     */
    private $hashMap;

    public function setUp()
    {
        $this->hashMap = $this->getMockBuilder(HashMapInterface::class)->getMock();

        $this->subject = new ProfileBounceStatus(
            1,
            3,
            66,
            1531381896,
            $this->hashMap
        );
    }

    public function testGetProfileIdCanReturnInt()
    {
        $this->assertSame(1, $this->subject->getProfileId());
    }

    public function testGetMailingIdCanReturnInt()
    {
        $this->assertSame(3, $this->subject->getMailingId());
    }

    public function testGetStatusCanReturnInt()
    {
        $this->assertSame(66, $this->subject->getStatus());
    }

    public function testGetTimestampCanReturnInt()
    {
        $this->assertSame(1531381896, $this->subject->getTimestamp());
    }

    public function testGetProfileDataCanReturnInstanceOfHashMapInterface()
    {
        $this->assertInstanceOf(
            HashMapInterface::class,
            $this->subject->getProfileData()
        );
    }
}
