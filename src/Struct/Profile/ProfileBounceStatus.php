<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Profile;

use Scn\EvalancheSoapStruct\Struct\Exception\StructNotHydratedException;
use Scn\EvalancheSoapStruct\Struct\Generic\HashMapInterface;

/**
 * Represents a profile bounce status element.
 * Contains information about the mailing id, time, status, and profile information.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Profile
 */
class ProfileBounceStatus implements ProfileBounceStatusInterface
{
    public function __construct(
        private null|HashMapInterface $profileData = null,
        private int $profileId = 0,
        private int $mailingId = 0,
        private int $status = 0,
        private int $timestamp = 0,
    ) {
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
        if (!$this->profileData instanceof HashMapInterface) {
            throw new StructNotHydratedException();
        }
        return $this->profileData;
    }
}
