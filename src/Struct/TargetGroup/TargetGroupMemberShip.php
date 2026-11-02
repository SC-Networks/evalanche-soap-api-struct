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
    public function __construct(
        private null|int $profileId = null,
        private null|int $targetGroupId = null
    ) {
    }

    public function getProfileId(): int
    {
        return (int) $this->profileId;
    }

    public function getTargetGroupId(): int
    {
        return (int) $this->targetGroupId;
    }
}
