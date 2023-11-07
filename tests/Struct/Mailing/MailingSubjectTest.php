<?php

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class MailingSubjectTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mailing
 */
class MailingSubjectTest extends StructTestCase
{
    /**
     * @var MailingSubject
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new MailingSubject(
            45,
            'some subject'
        );
    }

    public function testGetTargetGroupIdCanReturnInt(): void
    {
        self::assertSame(45, $this->subject->getTargetGroupId());
    }

    public function testGetSubjectCanReturnString(): void
    {
        self::assertSame('some subject', $this->subject->getSubject());
    }
}
