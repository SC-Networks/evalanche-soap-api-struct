<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Profile;

use Scn\EvalancheSoapStruct\Struct\Generic\HashMap;
use Scn\EvalancheSoapStruct\Struct\Generic\HashMapInterface;

/**
 * Represents a profile bounce status element.
 * Contains information about the mailing id, time, status, and profile information.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Profile
 */
class ProfileBounceStatus implements ProfileBounceStatusInterface
{
    /**
     * @var int
     */
    private $profileId;

    /**
     * @var int
     */
    private $mailingId;

    /**
     * @var int
     */
    private $status;

    /**
     * @var int
     */
    private $timestamp;

    /**
     * @var HashMap
     */
    private $profileData;

    public function __construct(
        int $profileId = null,
        int $mailingId = null,
        int $status = null,
        int $timestamp = null,
        HashMapInterface $profileData = null
    ) {
        $this->profileId = $profileId;
        $this->mailingId = $mailingId;
        $this->status = $status;
        $this->timestamp = $timestamp;
        $this->profileData = $profileData;
    }

    public function getProfileId(): int
    {
        return $this->profileId;
    }

    public function getMailingId(): int
    {
        return $this->mailingId;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    public function getProfileData(): HashMapInterface
    {
        return $this->profileData;
    }
}
