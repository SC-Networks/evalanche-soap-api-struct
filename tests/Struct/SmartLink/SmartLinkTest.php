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

    public function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        $this->subject = new SmartLink(
            234,
            'some name',
            'some tracking url'
        );
    }

    public function testGetIdCanReturnInt()
    {
        $this->assertSame(234, $this->subject->getId());
    }

    public function testGetNameCanReturnString()
    {
        $this->assertSame('some name', $this->subject->getName());
    }

    public function testGetTrackingUrlCanReturnString()
    {
        $this->assertSame('some tracking url', $this->subject->getTrackingUrl());
    }
}
