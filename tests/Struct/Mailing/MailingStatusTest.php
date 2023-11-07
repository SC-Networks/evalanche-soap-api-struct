<?php

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

use Scn\EvalancheSoapStruct\Struct\Generic\HashMapInterface;
use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class MailingStatusTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mailing
 */
class MailingStatusTest extends StructTestCase
{
    /**
     * @var MailingStatus
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new MailingStatus(
            23,
            35,
            555,
            333,
            'some preview url',
            [
                $this->getMockBuilder(HashMapInterface::class)->getMock(),
                $this->getMockBuilder(HashMapInterface::class)->getMock(),
                $this->getMockBuilder(HashMapInterface::class)->getMock(),
            ]
        );
    }

    public function testGetProfileIdCanReturnInt(): void
    {
        self::assertSame(23, $this->subject->getProfileId());
    }

    public function testGetNewsletterIdCanReturnInt(): void
    {
        self::assertSame(35, $this->subject->getNewsletterId());
    }

    public function testGetLastStatusChangeCanReturnInt(): void
    {
        self::assertSame(555, $this->subject->getLastStatusChange());
    }

    public function testGetStatusCanReturnInt(): void
    {
        self::assertSame(333, $this->subject->getStatus());
    }

    public function testGetPreviewUrlCanReturnString(): void
    {
        self::assertSame('some preview url', $this->subject->getPreviewUrl());
    }

    public function testGetProfileDataCanReturnArrayOfHashMap(): void
    {
        self::assertCount(3, $this->subject->getProfileData());
        self::assertContainsOnlyInstancesOf(HashMapInterface::class, $this->subject->getProfileData());
    }
}
