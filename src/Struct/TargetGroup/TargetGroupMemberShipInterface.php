<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\TargetGroup;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface TargetGroupMemberShipInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\TargetGroup
 */
interface TargetGroupMemberShipInterface extends StructInterface
{

    public function getProfileId(): int;

    public function getTargetGroupId(): int;
}
