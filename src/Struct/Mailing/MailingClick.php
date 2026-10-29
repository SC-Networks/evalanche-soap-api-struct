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
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $profileId;

    /**
     * @var int
     */
    private $timestamp;

    /**
     * @var int
     */
    private $linkId;

    /**
     * @var int
     */
    private $linkTypeId;

    /**
     * @var int
     */
    private $parentId;

    public function __construct(
        int $id = 0,
        int $profileId = 0,
        int $timestamp = 0,
        int $linkId = 0,
        int $linkTypeId = 0,
        int $parentId = 0
    ) {
        $this->id = $id;
        $this->profileId = $profileId;
        $this->timestamp = $timestamp;
        $this->linkId = $linkId;
        $this->linkTypeId = $linkTypeId;
        $this->parentId = $parentId;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getProfileId(): int
    {
        return $this->profileId;
    }

    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    public function getLinkId(): int
    {
        return $this->linkId;
    }

    public function getLinkTypeId(): int
    {
        return $this->linkTypeId;
    }

    public function getParentId(): int
    {
        return $this->parentId;
    }
}
