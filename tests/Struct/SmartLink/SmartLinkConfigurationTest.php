<?php

namespace Scn\EvalancheSoapStruct\Struct\SmartLink;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class SmartLinkConfigurationTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\SmartLink
 */
class SmartLinkConfigurationTest extends StructTestCase
{
    /**
     * @var SmartLinkConfiguration
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new SmartLinkConfiguration(
            123,
            'target url',
            true,
            234,
            [100, 101],
            345,
            true,
            false,
            true,
            [],
            []
        );
    }

    public function testGetId()
    {
        $this->assertSame(123, $this->subject->getId());
    }

    public function testGetTargetUrl()
    {
        $this->assertSame('target url', $this->subject->getTargetUrl());
    }

    public function testGetIndividualScoringConfig()
    {
        $this->assertSame(true, $this->subject->getIndividualScoringConfig());
    }

    public function testGetRestrictionTargetGroupId()
    {
        $this->assertSame(234, $this->subject->getRestrictionTargetGroupId());
    }

    public function testGetRestrictionUserAgents()
    {
        $this->assertSame([100, 101], $this->subject->getRestrictionUserAgents());
    }

    public function testGetMilestoneId()
    {
        $this->assertSame(345, $this->subject->getMilestoneId());
    }

    public function testGetActivateRedirect()
    {
        $this->assertSame(true, $this->subject->getActivateRedirect());
    }

    public function testGetActivateProfileUpdate()
    {
        $this->assertSame(false, $this->subject->getActivateProfileUpdate());
    }

    public function testGetActivateTracking()
    {
        $this->assertSame(true, $this->subject->getActivateTracking());
    }

    public function testGetScoringConfigs()
    {
        $this->assertSame([], $this->subject->getScoringConfigs());
    }

    public function testGetPoolAttributes()
    {
        $this->assertSame([], $this->subject->getPoolAttributes());
    }
}
