<?php

namespace Scn\EvalancheSoapStruct\Struct\TargetGroup;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface TargetGroupDetailInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\TargetGroup
 */
interface TargetGroupDetailInterface extends StructInterface
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return int
     */
    public function getProfileCount(): int;
}
