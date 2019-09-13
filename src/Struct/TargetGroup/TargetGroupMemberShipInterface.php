<?php

namespace Scn\EvalancheSoapStruct\Struct\TargetGroup;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface TargetGroupMemberShipInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\TargetGroup
 */
interface TargetGroupMemberShipInterface extends StructInterface
{

    /**
     * @return int
     */
    public function getProfileId(): int;

    /**
     * @return int
     */
    public function getTargetGroupId(): int;
}
