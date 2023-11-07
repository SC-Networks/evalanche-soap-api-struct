<?php

namespace Scn\EvalancheSoapStruct\Struct\SmartLink;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class SmartLinkTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Smartlink
 */
class SmartLinkTest extends StructTestCase
{
    /**
     * @var SmartLink
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new SmartLink(
            234,
            'some name',
            'some tracking url'
        );
    }

    public function testGetIdCanReturnInt(): void
    {
        self::assertSame(234, $this->subject->getId());
    }

    public function testGetNameCanReturnString(): void
    {
        self::assertSame('some name', $this->subject->getName());
    }

    public function testGetTrackingUrlCanReturnString(): void
    {
        self::assertSame('some tracking url', $this->subject->getTrackingUrl());
    }
}
