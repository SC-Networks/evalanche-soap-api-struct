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

    public function setUp()
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

    public function testGetIdCanReturnInt()
    {
        $this->assertSame(55, $this->subject->getId());
    }

    public function testGetNameCanReturnString()
    {
        $this->assertSame('some name', $this->subject->getName());
    }

    public function testGetUrlCanReturnString()
    {
        $this->assertSame('some url', $this->subject->getUrl());
    }

    public function testGetTypeIdCanReturnInt()
    {
        $this->assertSame(123, $this->subject->getTypeId());
    }

    public function testGetFolderIdCanReturnInt()
    {
        $this->assertSame(45, $this->subject->getFolderId());
    }

    public function testGetMandatorIdCanReturnInt()
    {
        $this->assertSame(23, $this->subject->getMandatorId());
    }

    public function testIsAliasCanReturnBool()
    {
        $this->assertFalse($this->subject->getIsAlias());
    }

    public function testGetImpressionsCanReturnInt()
    {
        $this->assertSame(1234, $this->subject->getImpressions());
    }

    public function testGetSucceededCanReturnInt()
    {
        $this->assertSame(23423, $this->subject->getSucceeded());
    }

    public function testGetIdentityErrorCountCanReturnInt()
    {
        $this->assertSame(34434, $this->subject->getIdentityErrorCount());
    }

    public function testGetDuplicationErrorCountCanReturnInt()
    {
        $this->assertSame(34534, $this->subject->getDuplicationErrorCount());
    }

    public function testGetValidationErrorCountCanReturnInt()
    {
        $this->assertSame(3434, $this->subject->getValidationErrorCount());
    }

    public function testGetMandatoryErrorCountCanReturnInt()
    {
        $this->assertSame(3434, $this->subject->getMandatoryErrorCount());
    }
}
