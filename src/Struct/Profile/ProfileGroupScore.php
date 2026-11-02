<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Profile;

/**
 * Represents a profile group score element.
 * Contains information about the group id, name, activity score and profile score.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Profile
 */
class ProfileGroupScore implements ProfileGroupScoreInterface
{
    public function __construct(
        private null|int $profileId = null,
        private null|int $groupId = null,
        private null|string $groupName = null,
        private null|int $activityScore = null,
        private null|int $profileScore = null
    ) {
    }

    public function getProfileId(): int
    {
        return (int) $this->profileId;
    }

    public function getGroupId(): int
    {
        return (int) $this->groupId;
    }

    public function getGroupName(): string
    {
        return (string) $this->groupName;
    }

    public function getActivityScore(): int
    {
        return (int) $this->activityScore;
    }

    public function getProfileScore(): int
    {
        return (int) $this->profileScore;
    }
}
