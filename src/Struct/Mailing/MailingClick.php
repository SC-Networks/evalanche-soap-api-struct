<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

use Scn\EvalancheSoapStruct\Struct\StructJsonSerializeTrait;

/**
 * Represents one click on a link.
 * Contains information about the link type (link to landing page, pdf version, etc.), link id, time and profile.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mailing
 */
class MailingClick implements MailingClickInterface
{
    use StructJsonSerializeTrait;

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

    /**
     * @param int $id
     * @param int $profileId
     * @param int $timestamp
     * @param int $linkId
     * @param int $linkTypeId
     * @param int $parentId
     */
    public function __construct(
        int $id = null,
        int $profileId = null,
        int $timestamp = null,
        int $linkId = null,
        int $linkTypeId = null,
        int $parentId = null
    ) {
        $this->id = $id;
        $this->profileId = $profileId;
        $this->timestamp = $timestamp;
        $this->linkId = $linkId;
        $this->linkTypeId = $linkTypeId;
        $this->parentId = $parentId;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getProfileId(): int
    {
        return $this->profileId;
    }

    /**
     * @return int
     */
    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    /**
     * @return int
     */
    public function getLinkId(): int
    {
        return $this->linkId;
    }

    /**
     * @return int
     */
    public function getLinkTypeId(): int
    {
        return $this->linkTypeId;
    }

    /**
     * @return int
     */
    public function getParentId(): int
    {
        return $this->parentId;
    }
}
