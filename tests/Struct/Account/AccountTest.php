<?php

namespace Scn\EvalancheSoapStruct\Struct\Account;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class AccountTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Account
 */
class AccountTest extends StructTestCase
{
    /**
     * @var Account
     */
    private $subject;

    public function setUp()
    {
        $this->subject = new Account(
            [$this->getMockBuilder(AccountingTypeInterface::class)->getMock()],
            $this->getMockBuilder(DiscountInterface::class)->getMock()
        );
    }

    public function testGetAccountingTypesCanReturnInstanceOfAccountingType()
    {
        $this->assertContainsOnlyInstancesOf(
            AccountingTypeInterface::class,
            $this->subject->getAccountingTypes()
        );
    }

    public function testGetDiscountCanReturnInstanceOfDiscount()
    {
        $this->assertInstanceOf(
            DiscountInterface::class,
            $this->subject->getDiscount()
        );
    }

}
