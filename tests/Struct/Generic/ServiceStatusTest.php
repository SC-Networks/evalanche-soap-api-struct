<?php

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class ServiceStatusTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class ServiceStatusTest extends StructTestCase
{
    /**
     * @var ServiceStatus
     */
    private $subject;

    public function setUp()
    {
        $this->subject = new ServiceStatus(
            'some status',
            'some random message'
        );
    }

    public function testGetStatusCanReturnString()
    {
        $this->assertSame('some status', $this->subject->getStatus());
    }

    public function testGetRandomMessageCanReturnString()
    {
        $this->assertSame('some random message', $this->subject->getRandomMessage());
    }
}
