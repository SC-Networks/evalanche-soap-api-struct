<?php

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class FormStatisticTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
class FormStatisticTest extends StructTestCase
{
    /**
     * @var FormStatistic
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new FormStatistic(
            55,
            'some name',
            'some url',
            123,
            45,
            23,
            false,
            1234,
            23423,
            34434,
            34534,
            3434,
            3434
        );
    }

    public function testGetIdCanReturnInt(): void
    {
        self::assertSame(55, $this->subject->getId());
    }

    public function testGetNameCanReturnString(): void
    {
        self::assertSame('some name', $this->subject->getName());
    }

    public function testGetUrlCanReturnString(): void
    {
        self::assertSame('some url', $this->subject->getUrl());
    }

    public function testGetTypeIdCanReturnInt(): void
    {
        self::assertSame(123, $this->subject->getTypeId());
    }

    public function testGetFolderIdCanReturnInt(): void
    {
        self::assertSame(45, $this->subject->getFolderId());
    }

    public function testGetMandatorIdCanReturnInt(): void
    {
        self::assertSame(23, $this->subject->getMandatorId());
    }

    public function testIsAliasCanReturnBool(): void
    {
        self::assertFalse($this->subject->getIsAlias());
    }

    public function testGetImpressionsCanReturnInt(): void
    {
        self::assertSame(1234, $this->subject->getImpressions());
    }

    public function testGetSucceededCanReturnInt(): void
    {
        self::assertSame(23423, $this->subject->getSucceeded());
    }

    public function testGetIdentityErrorCountCanReturnInt(): void
    {
        self::assertSame(34434, $this->subject->getIdentityErrorCount());
    }

    public function testGetDuplicationErrorCountCanReturnInt(): void
    {
        self::assertSame(34534, $this->subject->getDuplicationErrorCount());
    }

    public function testGetValidationErrorCountCanReturnInt(): void
    {
        self::assertSame(3434, $this->subject->getValidationErrorCount());
    }

    public function testGetMandatoryErrorCountCanReturnInt(): void
    {
        self::assertSame(3434, $this->subject->getMandatoryErrorCount());
    }
}
