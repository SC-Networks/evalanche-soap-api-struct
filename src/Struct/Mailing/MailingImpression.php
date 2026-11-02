<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

/**
 * Represents an impression (opening) of a specific mailing.
 * Contains information about the profile which performed the action, as well as the timestamp.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mailing
 */
class MailingImpression implements MailingImpressionInterface
{
    public function __construct(
        private null|int $id = null,
        private null|int $profileId = null,
        private null|int $timestamp = null
    ) {
    }

    public function getId(): int
    {
        return (int) $this->id;
    }

    public function getProfileId(): int
    {
        return (int) $this->profileId;
    }

    public function getTimestamp(): int
    {
        return (int) $this->timestamp;
    }
}
