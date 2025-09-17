<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use PHPUnit\Framework\TestCase;

class JobStateTest extends TestCase
{
    private JobState $subject;

    public function setUp(): void
    {
        $this->subject = new JobState(
            'some id',
            4,
            'some description',
        );
    }

    public function testGetIdCanReturnString(): void
    {
        self::assertSame('some id', $this->subject->getId());
    }

    public function testGetStatusCanReturnInt(): void
    {
        self::assertSame(4, $this->subject->getStatus());
    }

    public function testGetStatusDescriptionCanReturnString(): void
    {
        self::assertSame('some description', $this->subject->getStatusDescription());
    }
}
