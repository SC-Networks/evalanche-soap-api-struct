<?php

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\StructTestCase;

class ServiceStatusTest extends StructTestCase
{
    private ServiceStatus $subject;

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
