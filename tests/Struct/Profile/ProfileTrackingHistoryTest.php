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
            13090526,
            'referrer domain'
        );
    }

    public function testGetIdCanReturnInt()
    {
        $this->assertSame(111, $this->subject->getId());
    }

    public function testGetResourceIdCanReturnInt()
    {
        $this->assertSame(222, $this->subject->getResourceId());
    }

    public function testGetResourceNameCanReturnString()
    {
        $this->assertSame('resource name', $this->subject->getResourceName());
    }

    public function testGetResourceTypeIdCanReturnInt()
    {
        $this->assertSame(123, $this->subject->getResourceTypeId());
    }

    public function testGetSubResourceIdCanReturnInt()
    {
        $this->assertSame(333, $this->subject->getSubResourceId());
    }

    public function testGetSubResourceNameCanReturnString()
    {
        $this->assertSame('sub resource name', $this->subject->getSubResourceName());
    }

    public function testGetSubResourceTypeIdCanReturnInt()
    {
        $this->assertSame(234, $this->subject->getSubResourceTypeId());
    }

    public function testGetSubUrlCanReturnString()
    {
        $this->assertSame('sub url', $this->subject->getSubUrl());
    }

    public function testGetProfileIdCanReturnInt()
    {
        $this->assertSame(345, $this->subject->getProfileId());
    }

    public function testGetTypeCanReturnInt()
    {
        $this->assertSame(444, $this->subject->getType());
    }

    public function testGetTimestampCanReturnInt()
    {
        $this->assertSame(13090526, $this->subject->getTimestamp());
    }

    public function testGetReferrerDomainCanReturnString()
    {
        $this->assertSame('referrer domain', $this->subject->getReferrerDomain());
    }
}