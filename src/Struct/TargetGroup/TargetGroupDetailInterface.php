<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\TargetGroup;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface TargetGroupDetailInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\TargetGroup
 */
interface TargetGroupDetailInterface extends StructInterface
{
    public function getName(): string;

    public function getProfileCount(): int;
}
