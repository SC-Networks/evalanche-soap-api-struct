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

    public function setUp()
    {
        $this->subject = new MailingClick(
            1,
            2,
            1531397860,
            3,
            4,
            5
        );
    }

    public function testGetIdCanReturnInt()
    {
        $this->assertSame(1, $this->subject->getId());
    }

    public function testGetProfileIdCanReturnInt()
    {
        $this->assertSame(2, $this->subject->getProfileId());
    }

    public function testGetTimestampCanReturnInt()
    {
        $this->assertSame(1531397860, $this->subject->getTimestamp());
    }

    public function testGetLinkIdCanReturnInt()
    {
        $this->assertSame(3, $this->subject->getLinkId());
    }

    public function testGetLinkTypeIdCanReturnInt()
    {
        $this->assertSame(4, $this->subject->getLinkTypeId());
    }

    public function testGetParentIdCanReturnInt()
    {
        $this->assertSame(5, $this->subject->getParentId());
    }
}
