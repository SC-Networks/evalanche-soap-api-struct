<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface MailingSubjectInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mailing
 */
interface MailingSubjectInterface extends StructInterface
{
    public function getTargetGroupId(): int;

    public function getSubject(): string;
}
