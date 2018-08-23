<?php

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class MailingDetailTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mailing
 */
class MailingDetailTest extends StructTestCase
{
    /**
     * @var MailingDetail
     */
    private $subject;

    public function setUp()
    {
        $this->subject = new MailingDetail(
            1,
            'some name',
            'some url',
            4,
            5,
            6,
            7,
            8,
            true,
            'some preview url',
            'some report url',
            'some admin url',
            'some subject',
            4,
            123123,
            34534534
        );
    }

    public function testGetIdCanReturnInt()
    {
        $this->assertSame(1, $this->subject->getId());
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
        $this->assertSame(4, $this->subject->getTypeId());
    }

    public function testGetCategoryIdCanReturnInt()
    {
        $this->assertSame(5, $this->subject->getCategoryId());
    }

    public function testGetCustomerIdCanReturnInt()
    {
        $this->assertSame(6, $this->subject->getCustomerId());
    }

    public function testGetTimestampCanReturnInt()
    {
        $this->assertSame(7, $this->subject->getTimestamp());
    }

    public function testGetRecipientsCanReturnInt()
    {
        $this->assertSame(8, $this->subject->getRecipients());
    }

    public function testGetSentCanReturnBool()
    {
        $this->assertTrue($this->subject->getSent());
    }

    public function testGetPreviewUrlCanReturnString()
    {
        $this->assertSame('some preview url', $this->subject->getPreviewUrl());
    }

    public function testGetReportUrlCanReturnString()
    {
        $this->assertSame('some report url', $this->subject->getReportUrl());
    }

    public function testGetAdminUrlCanReturnString()
    {
        $this->assertSame('some admin url', $this->subject->getAdminUrl());
    }

    public function testGetSubjectCanReturnString()
    {
        $this->assertSame('some subject', $this->subject->getSubject());
    }

    public function testGetTargetGroupIdCanReturnInt()
    {
        $this->assertSame(4, $this->subject->getTargetGroupId());
    }

    public function testGetSendStartTimeCanReturnInt()
    {
        $this->assertSame(123123, $this->subject->getSendStartTime());
    }

    public function testGetSendEndTimeCanReturnInt()
    {
        $this->assertSame(34534534, $this->subject->getSendEndTime());
    }
}
