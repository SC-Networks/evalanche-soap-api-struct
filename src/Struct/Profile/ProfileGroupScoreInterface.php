<?php

namespace Scn\EvalancheSoapStruct\Struct\Profile;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface ProfileGroupScoreInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Profile
 */
interface ProfileGroupScoreInterface extends StructInterface
{
    /**
     * @return int
     */
    public function getProfileId(): int;

    /**
     * @return int
     */
    public function getGroupId(): int;

    /**
     * @return string
     */
    public function getGroupName(): string;

    /**
     * @return int
     */
    public function getActivityScore(): int;

    /**
     * @return int
     */
    public function getProfileScore(): int;
}
