<?php

namespace Scn\EvalancheSoapStruct\Struct\Account;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class AccountingItemTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Account
 */
class AccountingItemTest extends StructTestCase
{
    /**
     * @var AccountingItem
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new AccountingItem(
            'some description',
            435,
            'some string',
            5
        );
    }

    public function testGetDescriptionCanReturnString()
    {
        $this->assertSame('some description', $this->subject->getDescription());
    }

    public function testGetMandatorIdCanReturnInteger()
    {
        $this->assertSame(435, $this->subject->getMandatorId());
    }

    public function testGetAccountingDateCanReturnString()
    {
        $this->assertSame('some string', $this->subject->getAccountingDate());
    }

    public function testGetChargeCountCanReturnInteger()
    {
        $this->assertSame(5, $this->subject->getChargeCount());
    }
}
