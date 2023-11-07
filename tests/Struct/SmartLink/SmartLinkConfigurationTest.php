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

    public function testGetId(): void
    {
        self::assertSame(123, $this->subject->getId());
    }

    public function testGetTargetUrl(): void
    {
        self::assertSame('target url', $this->subject->getTargetUrl());
    }

    public function testGetIndividualScoringConfig(): void
    {
        self::assertSame(true, $this->subject->getIndividualScoringConfig());
    }

    public function testGetRestrictionTargetGroupId(): void
    {
        self::assertSame(234, $this->subject->getRestrictionTargetGroupId());
    }

    public function testGetRestrictionUserAgents(): void
    {
        self::assertSame([100, 101], $this->subject->getRestrictionUserAgents());
    }

    public function testGetMilestoneId(): void
    {
        self::assertSame(345, $this->subject->getMilestoneId());
    }

    public function testGetActivateRedirect(): void
    {
        self::assertSame(true, $this->subject->getActivateRedirect());
    }

    public function testGetActivateProfileUpdate(): void
    {
        self::assertSame(false, $this->subject->getActivateProfileUpdate());
    }

    public function testGetActivateTracking(): void
    {
        self::assertSame(true, $this->subject->getActivateTracking());
    }

    public function testGetScoringConfigs(): void
    {
        self::assertSame([], $this->subject->getScoringConfigs());
    }

    public function testGetPoolAttributes(): void
    {
        self::assertSame([], $this->subject->getPoolAttributes());
    }
}
