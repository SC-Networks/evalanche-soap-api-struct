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

    public function setUp()
    {
        $this->subject = new HashMapItem(
            'some string',
            'some value'
        );
    }

    public function testGetKeyCanReturnString()
    {
        $this->assertSame('some string', $this->subject->getKey());
    }

    public function testGetValueCanReturnString()
    {
        $this->assertSame('some value', $this->subject->getValue());
    }

    public function testSetValueCanSetStringAndReturnSelf()
    {
        $this->assertSame('some other value', $this->subject->setValue('some other value')->getValue());
    }
}
