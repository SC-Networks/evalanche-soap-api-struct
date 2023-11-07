<?php

namespace Scn\EvalancheSoapStruct\Struct\Profile;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class ProfileTrackingHistoryTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Profile
 */
class ProfileTrackingHistoryTest extends StructTestCase
{
    /**
     * @var ProfileTrackingHistory
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new ProfileTrackingHistory(
            111,
            222,
            'resource name',
            123,
            333,
            'sub resource name',
            234,
            'sub url',
            345,
            444,
            13_090_526,
            'referrer domain'
        );
    }

    public function testGetIdCanReturnInt(): void
    {
        self::assertSame(111, $this->subject->getId());
    }

    public function testGetResourceIdCanReturnInt(): void
    {
        self::assertSame(222, $this->subject->getResourceId());
    }

    public function testGetResourceNameCanReturnString(): void
    {
        self::assertSame('resource name', $this->subject->getResourceName());
    }

    public function testGetResourceTypeIdCanReturnInt(): void
    {
        self::assertSame(123, $this->subject->getResourceTypeId());
    }

    public function testGetSubResourceIdCanReturnInt(): void
    {
        self::assertSame(333, $this->subject->getSubResourceId());
    }

    public function testGetSubResourceNameCanReturnString(): void
    {
        self::assertSame('sub resource name', $this->subject->getSubResourceName());
    }

    public function testGetSubResourceTypeIdCanReturnInt(): void
    {
        self::assertSame(234, $this->subject->getSubResourceTypeId());
    }

    public function testGetSubUrlCanReturnString(): void
    {
        self::assertSame('sub url', $this->subject->getSubUrl());
    }

    public function testGetProfileIdCanReturnInt(): void
    {
        self::assertSame(345, $this->subject->getProfileId());
    }

    public function testGetTypeCanReturnInt(): void
    {
        self::assertSame(444, $this->subject->getType());
    }

    public function testGetTimestampCanReturnInt(): void
    {
        self::assertSame(13_090_526, $this->subject->getTimestamp());
    }

    public function testGetReferrerDomainCanReturnString(): void
    {
        self::assertSame('referrer domain', $this->subject->getReferrerDomain());
    }
}
