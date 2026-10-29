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
    /**
     * @var int
     */
    private $profileId;

    /**
     * @var int
     */
    private $groupId;

    /**
     * @var string
     */
    private $groupName;

    /**
     * @var int
     */
    private $activityScore;

    /**
     * @var int
     */
    private $profileScore;

    public function __construct(
        int $profileId = null,
        int $groupId = null,
        string $groupName = null,
        int $activityScore = null,
        int $profileScore = null
    ) {
        $this->profileId = $profileId;
        $this->groupId = $groupId;
        $this->groupName = $groupName;
        $this->activityScore = $activityScore;
        $this->profileScore = $profileScore;
    }

    public function getProfileId(): int
    {
        return $this->profileId;
    }

    public function getGroupId(): int
    {
        return $this->groupId;
    }

    public function getGroupName(): string
    {
        return $this->groupName;
    }

    public function getActivityScore(): int
    {
        return $this->activityScore;
    }

    public function getProfileScore(): int
    {
        return $this->profileScore;
    }
}
