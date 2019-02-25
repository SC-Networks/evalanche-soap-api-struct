<?php

namespace Scn\EvalancheSoapStruct\Struct\Pool;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class PoolAttributeOptionTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Pool
 */
class PoolAttributeOptionTest extends StructTestCase
{
    /**
     * @var PoolAttributeOption
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new PoolAttributeOption(
            55,
            'some value'
        );
    }

    public function testGetIdCanReturnInt()
    {
        $this->assertSame(55, $this->subject->getId());
    }

    public function testGetValueCanReturnString()
    {
        $this->assertSame('some value', $this->subject->getValue());
    }
}
