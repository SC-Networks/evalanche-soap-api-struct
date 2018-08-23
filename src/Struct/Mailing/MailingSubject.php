<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

/**
 * Class MailingSubject
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mailing
 */
class MailingSubject implements MailingSubjectInterface
{
    /**
     * @var int
     */
    private $targetGroupId;

    /**
     * @var string
     */
    private $subject;

    /**
     * @param int $targetGroupId
     * @param string $subject
     */
    public function __construct(int $targetGroupId = null, string $subject = null)
    {
        $this->targetGroupId = $targetGroupId;
        $this->subject = $subject;
    }

    /**
     * @return int
     */
    public function getTargetGroupId(): int
    {
        return $this->targetGroupId;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }
}