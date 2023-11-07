<?php

namespace Scn\EvalancheSoapStruct\Struct\SmartLink;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class SmartLinkPoolConfigurationTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\SmartLink
 */
class SmartLinkPoolConfigurationTest extends StructTestCase
{
    /**
     * @var SmartLinkPoolConfiguration
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new SmartLinkPoolConfiguration(
            123,
            234,
            345,
            'some value',
            true
        );
    }

    public function testGetId(): void
    {
        self::assertSame(123, $this->subject->getId());
    }

    public function testGetPoolId(): void
    {
        self::assertSame(234, $this->subject->getPoolId());
    }

    public function testGetPoolAttributeId(): void
    {
        self::assertSame(345, $this->subject->getPoolAttributeId());
    }

    public function testGetValue(): void
    {
        self::assertSame('some value', $this->subject->getValue());
    }

    public function testGetIsMerge(): void
    {
        self::assertSame(true, $this->subject->getIsMerge());
    }
}
