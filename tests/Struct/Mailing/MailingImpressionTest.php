<?php

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class MailingImpressionTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mailing
 */
class MailingImpressionTest extends StructTestCase
{
    /**
     * @var MailingImpression
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new MailingImpression(
            123,
            456,
            1_531_398_079
        );
    }

    public function testGetIdCanReturnInt(): void
    {
        self::assertSame(123, $this->subject->getId());
    }

    public function testGetProfileIdCanReturnInt(): void
    {
        self::assertSame(456, $this->subject->getProfileId());
    }

    public function testGetTimestampCanReturnInt(): void
    {
        self::assertSame(1_531_398_079, $this->subject->getTimestamp());
    }
}
