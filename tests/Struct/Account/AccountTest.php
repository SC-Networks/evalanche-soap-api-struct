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

    public function setUp(): void
    {
        $this->subject = new Account(
            $this->createStub(DiscountInterface::class),
            [$this->createStub(AccountingTypeInterface::class)],
        );
    }

    public function testGetAccountingTypesCanReturnInstanceOfAccountingType(): void
    {
        self::assertContainsOnlyInstancesOf(AccountingTypeInterface::class, $this->subject->getAccountingTypes());
    }

    public function testGetDiscountCanReturnInstanceOfDiscount(): void
    {
        self::assertInstanceOf(DiscountInterface::class, $this->subject->getDiscount());
    }
}
