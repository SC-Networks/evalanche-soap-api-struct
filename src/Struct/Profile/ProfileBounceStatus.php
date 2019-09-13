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

    /**
     * @param int $profileId
     * @param int $mailingId
     * @param int $status
     * @param int $timestamp
     * @param HashMapInterface $profileData
     */
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
    public function getMailingId(): int
    {
        return $this->mailingId;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    /**
     * @return HashMapInterface
     */
    public function getProfileData(): HashMapInterface
    {
        return $this->profileData;
    }
}
