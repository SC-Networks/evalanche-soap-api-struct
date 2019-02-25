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
            1531398079
        );
    }

    public function testGetIdCanReturnInt()
    {
        $this->assertSame(123, $this->subject->getId());
    }

    public function testGetProfileIdCanReturnInt()
    {
        $this->assertSame(456, $this->subject->getProfileId());
    }

    public function testGetTimestampCanReturnInt()
    {
        $this->assertSame(1531398079, $this->subject->getTimestamp());
    }

}
