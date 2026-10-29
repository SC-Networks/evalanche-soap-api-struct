<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Profile;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface ProfileGroupScoreInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Profile
 */
interface ProfileGroupScoreInterface extends StructInterface
{
    public function getProfileId(): int;

    public function getGroupId(): int;

    public function getGroupName(): string;

    public function getActivityScore(): int;

    public function getProfileScore(): int;
}
