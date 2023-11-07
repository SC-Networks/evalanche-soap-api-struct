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

    public function setUp(): void
    {
        $this->hashMap = $this->getMockBuilder(HashMapInterface::class)->getMock();

        $this->subject = new ProfileBounceStatus(
            1,
            3,
            66,
            1_531_381_896,
            $this->hashMap
        );
    }

    public function testGetProfileIdCanReturnInt(): void
    {
        self::assertSame(1, $this->subject->getProfileId());
    }

    public function testGetMailingIdCanReturnInt(): void
    {
        self::assertSame(3, $this->subject->getMailingId());
    }

    public function testGetStatusCanReturnInt(): void
    {
        self::assertSame(66, $this->subject->getStatus());
    }

    public function testGetTimestampCanReturnInt(): void
    {
        self::assertSame(1_531_381_896, $this->subject->getTimestamp());
    }

    public function testGetProfileDataCanReturnInstanceOfHashMapInterface(): void
    {
        self::assertInstanceOf(HashMapInterface::class, $this->subject->getProfileData());
    }
}
