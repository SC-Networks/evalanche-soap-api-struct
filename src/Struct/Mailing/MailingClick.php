<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

/**
 * Represents one click on a link.
 * Contains information about the link type (link to landing page, pdf version, etc.), link id, time and profile.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mailing
 */
class MailingClick implements MailingClickInterface
{
    public function __construct(
        private null|int $id = null,
        private null|int $profileId = null,
        private null|int $timestamp = null,
        private null|int $linkId = null,
        private null|int $linkTypeId = null,
        private null|int $parentId = null
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

    public function getLinkId(): int
    {
        return (int) $this->linkId;
    }

    public function getLinkTypeId(): int
    {
        return (int) $this->linkTypeId;
    }

    public function getParentId(): int
    {
        return (int) $this->parentId;
    }
}
