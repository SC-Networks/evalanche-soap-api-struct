<?php

namespace Scn\EvalancheSoapStruct\Struct\Account;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class AccountingTypeTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Account
 */
class AccountingTypeTest extends StructTestCase
{
    /**
     * @var AccountingType
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new AccountingType(
            123,
            23,
            1.45,
            'EUR',
            [
                $this->getMockBuilder(AccountingItemInterface::class)->getMock(),
                $this->getMockBuilder(AccountingItemInterface::class)->getMock(),
            ]
        );
    }

    public function testGetTypeIdCanReturnInteger(): void
    {
        self::assertSame(123, $this->subject->getTypeId());
    }

    public function testGetAmountCanReturnInteger(): void
    {
        self::assertSame(23, $this->subject->getAmount());
    }

    public function testGetPriceCanReturnFloat(): void
    {
        self::assertSame(1.45, $this->subject->getPrice());
    }

    public function testGetCurrencyCanReturnString(): void
    {
        self::assertSame('EUR', $this->subject->getCurrency());
    }

    public function testGetAccountingItemsCanReturnArrayOfAccountingItemInterface(): void
    {
        self::assertContainsOnlyInstancesOf(AccountingItemInterface::class, $this->subject->getAccountingItems());
    }
}
