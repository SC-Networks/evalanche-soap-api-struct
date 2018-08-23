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
}