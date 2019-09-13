<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\TargetGroup;

/**
 * Represents the assignment of profiles in TargetGroup.
 * Contains information about the assignment of a profile to a TargetGroup.
 *
 * @package Scn\EvalancheSoapStruct\Struct\TargetGroup
 */
class TargetGroupMemberShip implements TargetGroupMemberShipInterface
{
    /**
     * @var int
     */
    private $profileId;

    /**
     * @var int
     */
    private $targetGroupId;

    /**
     * @param int $profileId
     * @param int $targetGroupId
     */
    public function __construct(int $profileId = null, int $targetGroupId = null)
    {
        $this->profileId = $profileId;
        $this->targetGroupId = $targetGroupId;
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
    public function getTargetGroupId(): int
    {
        return $this->targetGroupId;
    }
}
