<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface MailingImpressionInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mailing
 */
interface MailingImpressionInterface extends StructInterface
{
    public function getId(): int;

    public function getProfileId(): int;

    public function getTimestamp(): int;
}
