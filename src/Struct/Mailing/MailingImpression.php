<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

use Scn\EvalancheSoapStruct\Struct\StructJsonSerializeTrait;

/**
 * Represents an impression (opening) of a specific mailing.
 * Contains information about the profile which performed the action, as well as the timestamp.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mailing
 */
class MailingImpression implements MailingImpressionInterface
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
     * @param int $id
     * @param int $profileId
     * @param int $timestamp
     */
    public function __construct(int $id = null, int $profileId = null, int $timestamp = null)
    {
        $this->id = $id;
        $this->profileId = $profileId;
        $this->timestamp = $timestamp;
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
}
