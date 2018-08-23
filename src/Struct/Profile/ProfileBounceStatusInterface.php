<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Profile;

use Scn\EvalancheSoapStruct\Struct\Generic\HashMapInterface;
use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface ProfileBounceStatusInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Profile
 */
interface ProfileBounceStatusInterface extends StructInterface
{
    /**
     * @return int
     */
    public function getProfileId(): int;

    /**
     * @return int
     */
    public function getMailingId(): int;

    /**
     * @return int
     */
    public function getStatus(): int;

    /**
     * @return int
     */
    public function getTimestamp(): int;

    /**
     * @return HashMapInterface
     */
    public function getProfileData(): HashMapInterface;
}