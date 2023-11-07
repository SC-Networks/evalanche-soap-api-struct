<?php

namespace Scn\EvalancheSoapStruct\Struct\Marketplace;

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
            'some title',
            'some text',
            700
        );
    }

    public function testGetIdCanReturnString(): void
    {
        self::assertSame('some-fancy-uuid', $this->subject->getId());
    }

    public function testGetPriceCanReturnInteger(): void
    {
        self::assertSame(700, $this->subject->getPrice());
    }

    public function testGetTextCanReturnString(): void
    {
        self::assertSame('some text', $this->subject->getText());
    }

    public function testGetTitleCanReturnString(): void
    {
        self::assertSame('some title', $this->subject->getTitle());
    }
}
