<?php

namespace Scn\EvalancheSoapStruct\Struct\SmartLink;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class SmartLinkScoringConfigurationTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\SmartLink
 */
class SmartLinkScoringConfigurationTest extends StructTestCase
{
    /**
     * @var SmartLinkScoringConfiguration
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new SmartLinkScoringConfiguration(
            123,
            'some name',
            234,
            345,
            456,
            567
        );
    }

    public function testGetId()
    {
        $this->assertSame(123, $this->subject->getId());
    }

    public function testGetName()
    {
        $this->assertSame('some name', $this->subject->getName());
    }

    public function testGetValue()
    {
        $this->assertSame(234, $this->subject->getValue());
    }

    public function testGetMultipleScoreTimeThreshold()
    {
        $this->assertSame(345, $this->subject->getMultipleScoreTimeThreshold());
    }

    public function testGetScoringGroupId()
    {
        $this->assertSame(456, $this->subject->getScoringGroupId());
    }

    public function testGetType()
    {
        $this->assertSame(567, $this->subject->getType());
    }
}
