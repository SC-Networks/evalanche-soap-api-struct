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

    public function setUp(): void
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
            34_534_534
        );
    }

    public function testGetIdCanReturnInt(): void
    {
        self::assertSame(1, $this->subject->getId());
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
        self::assertSame(4, $this->subject->getTypeId());
    }

    public function testGetFolderIdCanReturnInt(): void
    {
        self::assertSame(5, $this->subject->getFolderId());
    }

    public function testGetMandatorIdCanReturnInt(): void
    {
        self::assertSame(6, $this->subject->getMandatorId());
    }

    public function testGetTimestampCanReturnInt(): void
    {
        self::assertSame(7, $this->subject->getTimestamp());
    }

    public function testGetRecipientsCanReturnInt(): void
    {
        self::assertSame(8, $this->subject->getRecipients());
    }

    public function testGetSentCanReturnBool(): void
    {
        self::assertTrue($this->subject->getSent());
    }

    public function testGetPreviewUrlCanReturnString(): void
    {
        self::assertSame('some preview url', $this->subject->getPreviewUrl());
    }

    public function testGetReportUrlCanReturnString(): void
    {
        self::assertSame('some report url', $this->subject->getReportUrl());
    }

    public function testGetAdminUrlCanReturnString(): void
    {
        self::assertSame('some admin url', $this->subject->getAdminUrl());
    }

    public function testGetSubjectCanReturnString(): void
    {
        self::assertSame('some subject', $this->subject->getSubject());
    }

    public function testGetTargetGroupIdCanReturnInt(): void
    {
        self::assertSame(4, $this->subject->getTargetGroupId());
    }

    public function testGetSendStartTimeCanReturnInt(): void
    {
        self::assertSame(123123, $this->subject->getSendStartTime());
    }

    public function testGetSendEndTimeCanReturnInt(): void
    {
        self::assertSame(34_534_534, $this->subject->getSendEndTime());
    }
}
