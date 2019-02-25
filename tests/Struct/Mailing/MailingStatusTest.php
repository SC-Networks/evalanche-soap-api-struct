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

    public function testGetProfileIdCanReturnInt()
    {
        $this->assertSame(23, $this->subject->getProfileId());
    }

    public function testGetNewsletterIdCanReturnInt()
    {
        $this->assertSame(35, $this->subject->getNewsletterId());
    }

    public function testGetLastStatusChangeCanReturnInt()
    {
        $this->assertSame(555, $this->subject->getLastStatusChange());
    }

    public function testGetStatusCanReturnInt()
    {
        $this->assertSame(333, $this->subject->getStatus());
    }

    public function testGetPreviewUrlCanReturnString()
    {
        $this->assertSame('some preview url', $this->subject->getPreviewUrl());
    }

    public function testGetProfileDataCanReturnArrayOfHashMap()
    {
        $this->assertCount(3, $this->subject->getProfileData());
        $this->assertContainsOnlyInstancesOf(HashMapInterface::class, $this->subject->getProfileData());
    }
}
