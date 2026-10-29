<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface MailingClickInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mailing
 */
interface MailingClickInterface extends StructInterface
{
    public function getId(): int;

    public function getProfileId(): int;

    public function getTimestamp(): int;

    public function getLinkId(): int;

    public function getLinkTypeId(): int;

    public function getParentId(): int;
}
