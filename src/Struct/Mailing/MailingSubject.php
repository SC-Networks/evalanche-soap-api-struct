<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

/**
 * Represents a combination of a specific TargetGroup id and a specific subject text.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mailing
 */
class MailingSubject implements MailingSubjectInterface
{
    public function __construct(
        private null|int $targetGroupId = null,
        private null|string $subject = null
    ) {
    }

    public function getTargetGroupId(): int
    {
        return (int) $this->targetGroupId;
    }

    public function getSubject(): string
    {
        return (string) $this->subject;
    }
}
