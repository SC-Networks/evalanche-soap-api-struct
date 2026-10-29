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
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $profileCount;

    public function __construct(string $name = '', int $profileCount = 0)
    {
        $this->name = $name;
        $this->profileCount = $profileCount;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getProfileCount(): int
    {
        return $this->profileCount;
    }
}
