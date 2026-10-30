<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Profile;

use Scn\EvalancheSoapStruct\Struct\Exception\StructNotHydratedException;
use Scn\EvalancheSoapStruct\Struct\Generic\HashMapInterface;
use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface ProfileBounceStatusInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Profile
 */
interface ProfileBounceStatusInterface extends StructInterface
{
    public function getProfileId(): int;

    public function getMailingId(): int;

    public function getStatus(): int;

    public function getTimestamp(): int;

    /**
     * @throws StructNotHydratedException
     */
    public function getProfileData(): HashMapInterface;
}
