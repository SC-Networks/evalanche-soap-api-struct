<?php

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\StructTestCase;

class LanguageTest extends StructTestCase
{
    /**
     * @var Language
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new Language(
            45,
            'some text'
        );
    }

    public function testGetIdCanReturnInteger()
    {
        $this->assertSame(45, $this->subject->getId());
    }

    public function testGetTextCanReturnString()
    {
        $this->assertSame('some text', $this->subject->getText());
    }
}
