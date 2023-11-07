<?php

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class MailingClickTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mailing
 */
class MailingClickTest extends StructTestCase
{
    /**
     * @var MailingClick
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new MailingClick(
            1,
            2,
            1_531_397_860,
            3,
            4,
            5
        );
    }

    public function testGetIdCanReturnInt(): void
    {
        self::assertSame(1, $this->subject->getId());
    }

    public function testGetProfileIdCanReturnInt(): void
    {
        self::assertSame(2, $this->subject->getProfileId());
    }

    public function testGetTimestampCanReturnInt(): void
    {
        self::assertSame(1_531_397_860, $this->subject->getTimestamp());
    }

    public function testGetLinkIdCanReturnInt(): void
    {
        self::assertSame(3, $this->subject->getLinkId());
    }

    public function testGetLinkTypeIdCanReturnInt(): void
    {
        self::assertSame(4, $this->subject->getLinkTypeId());
    }

    public function testGetParentIdCanReturnInt(): void
    {
        self::assertSame(5, $this->subject->getParentId());
    }
}
