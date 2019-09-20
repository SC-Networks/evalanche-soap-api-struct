<?php

namespace Scn\EvalancheSoapStruct\Struct\Marketplace;

use Scn\EvalancheSoapStruct\Struct\Generic\LanguageInterface;
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
            [
                $this->getMockBuilder(LanguageInterface::class)->getMock(),
                $this->getMockBuilder(LanguageInterface::class)->getMock(),
            ]
        );
    }

    public function testGetIdCanReturnInteger()
    {
        $this->assertSame(
            55,
            $this->subject->getId()
        );
    }

    public function testGetTextCanReturnArrayOfLanguageInterface()
    {
        $this->assertCount(2, $this->subject->getText());
        $this->assertContainsOnlyInstancesOf(
            LanguageInterface::class,
            $this->subject->getText()
        );
    }
}
