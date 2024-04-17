<?php

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\StructTestCase;

class HashMapItemTest extends StructTestCase
{
    private HashMapItem $subject;

    public function setUp(): void
    {
        $this->subject = new HashMapItem(
            'some string',
            'some value'
        );
    }

    public function testGetKeyCanReturnString(): void
    {
        self::assertSame('some string', $this->subject->getKey());
    }

    public function testGetValueCanReturnString(): void
    {
        self::assertSame('some value', $this->subject->getValue());
    }

    public function testSetValueCanSetStringAndReturnSelf(): void
    {
        self::assertSame('some other value', $this->subject->setValue('some other value')->getValue());
    }
}
