<?php

namespace Scn\EvalancheSoapStruct\Struct\Account;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class DiscountTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Account
 */
class DiscountTest extends StructTestCase
{
    /**
     * @var Discount
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new Discount(
            'some description',
            2.00,
            1.23
        );
    }

    public function testGetDescriptionCanReturnString()
    {
        $this->assertSame('some description', $this->subject->getDescription());
    }

    public function testGetPercentCanReturnFloat()
    {
        $this->assertSame(2.00, $this->subject->getPercent());
    }

    public function testGetPriceCanReturnFloat()
    {
        $this->assertSame(1.23, $this->subject->getPrice());
    }
}
