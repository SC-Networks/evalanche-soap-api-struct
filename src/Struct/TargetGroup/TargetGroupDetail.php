<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\TargetGroup;

/**
 * Class TargetGroupDetail
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

    /**
     * @param string $name
     * @param int $profileCount
     */
    public function __construct(string $name = null, int $profileCount = null)
    {
        $this->name = $name;
        $this->profileCount = $profileCount;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getProfileCount(): int
    {
        return $this->profileCount;
    }
}