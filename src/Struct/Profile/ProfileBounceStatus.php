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
        private null|int $profileId = null,
        private null|int $mailingId = null,
        private null|int $status = null,
        private null|int $timestamp = null,
    ) {
    }

    public function getProfileId(): int
    {
        return (int) $this->profileId;
    }

    public function getMailingId(): int
    {
        return (int) $this->mailingId;
    }

    public function getStatus(): int
    {
        return (int) $this->status;
    }

    public function getTimestamp(): int
    {
        return (int) $this->timestamp;
    }

    public function getProfileData(): HashMapInterface
    {
        if (!$this->profileData instanceof HashMapInterface) {
            throw new StructNotHydratedException();
        }
        return $this->profileData;
    }
}
