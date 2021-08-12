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

    public function testGetId()
    {
        $this->assertSame(123, $this->subject->getId());
    }

    public function testGetPoolId()
    {
        $this->assertSame(234, $this->subject->getPoolId());
    }

    public function testGetPoolAttributeId()
    {
        $this->assertSame(345, $this->subject->getPoolAttributeId());
    }

    public function testGetValue()
    {
        $this->assertSame('some value', $this->subject->getValue());
    }

    public function testGetIsMerge()
    {
        $this->assertSame(true, $this->subject->getIsMerge());
    }
}
