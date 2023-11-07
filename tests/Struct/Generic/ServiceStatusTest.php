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

    public function setUp(): void
    {
        $this->subject = new ServiceStatus(
            'some status',
            'some random message'
        );
    }

    public function testGetStatusCanReturnString(): void
    {
        self::assertSame('some status', $this->subject->getStatus());
    }

    public function testGetRandomMessageCanReturnString(): void
    {
        self::assertSame('some random message', $this->subject->getRandomMessage());
    }
}
