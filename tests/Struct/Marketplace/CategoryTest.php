<?php

namespace Scn\EvalancheSoapStruct\Struct\Marketplace;

use Scn\EvalancheSoapStruct\StructTestCase;

class CategoryTest extends StructTestCase
{
    /**
     * @var Category
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new Category(
            55,
            'some text'
        );
    }

    public function testGetIdCanReturnInteger()
    {
        $this->assertSame(
            55,
            $this->subject->getId()
        );
    }

    public function testGetTextCanReturnString()
    {
        $this->assertSame('some text', $this->subject->getText());
    }
}
