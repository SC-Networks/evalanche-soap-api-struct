<?php

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface MailingClickInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mailing
 */
interface MailingClickInterface extends StructInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return int
     */
    public function getProfileId(): int;

    /**
     * @return int
     */
    public function getTimestamp(): int;

    /**
     * @return int
     */
    public function getLinkId(): int;

    /**
     * @return int
     */
    public function getLinkTypeId(): int;

    /**
     * @return int
     */
    public function getParentId(): int;
}
