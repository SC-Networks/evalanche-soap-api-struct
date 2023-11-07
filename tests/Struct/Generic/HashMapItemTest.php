<?php

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class HashMapItemTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class HashMapItemTest extends StructTestCase
{
    /**
     * @var HashMapItem
     */
    private $subject;

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
