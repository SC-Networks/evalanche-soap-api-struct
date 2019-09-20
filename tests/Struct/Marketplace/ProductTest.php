<?php

namespace Scn\EvalancheSoapStruct\Struct\Marketplace;

use Scn\EvalancheSoapStruct\Struct\Generic\LanguageInterface;
use Scn\EvalancheSoapStruct\StructTestCase;

class ProductTest extends StructTestCase
{
    /**
     * @var Product
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new Product(
            'some-fancy-uuid',
            700,
            [
                $this->getMockBuilder(LanguageInterface::class)->getMock(),
                $this->getMockBuilder(LanguageInterface::class)->getMock(),
            ]
        );
    }

    public function testGetIdCanReturnString()
    {
        $this->assertSame(
            'some-fancy-uuid',
            $this->subject->getId()
        );
    }

    public function testGetPriceCanReturnInteger()
    {
        $this->assertSame(
            700,
            $this->subject->getPrice()
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
