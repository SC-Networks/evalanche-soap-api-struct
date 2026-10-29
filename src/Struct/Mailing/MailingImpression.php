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

    public function __construct(int $id = null, int $profileId = null, int $timestamp = null)
    {
        $this->id = $id;
        $this->profileId = $profileId;
        $this->timestamp = $timestamp;
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
}
