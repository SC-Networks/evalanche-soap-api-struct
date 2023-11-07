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

    public function testGetId(): void
    {
        self::assertSame(123, $this->subject->getId());
    }

    public function testGetName(): void
    {
        self::assertSame('some name', $this->subject->getName());
    }

    public function testGetValue(): void
    {
        self::assertSame(234, $this->subject->getValue());
    }

    public function testGetMultipleScoreTimeThreshold(): void
    {
        self::assertSame(345, $this->subject->getMultipleScoreTimeThreshold());
    }

    public function testGetScoringGroupId(): void
    {
        self::assertSame(456, $this->subject->getScoringGroupId());
    }

    public function testGetType(): void
    {
        self::assertSame(567, $this->subject->getType());
    }
}
