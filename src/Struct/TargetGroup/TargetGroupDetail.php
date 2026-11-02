<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\TargetGroup;

/**
 * Represents a target group detail information.
 * Contains information about the target group name as well as the number of profiles contained.
 *
 * @package Scn\EvalancheSoapStruct\Struct\TargetGroup
 */
class TargetGroupDetail implements TargetGroupDetailInterface
{
    public function __construct(
        private null|string $name = null,
        private null|int $profileCount = null
    ) {
    }

    public function getName(): string
    {
        return (string) $this->name;
    }

    public function getProfileCount(): int
    {
        return (int) $this->profileCount;
    }
}
