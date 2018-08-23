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
    /**
     * @return int
     */
    public function getTargetGroupId(): int;

    /**
     * @return string
     */
    public function getSubject(): string;
}