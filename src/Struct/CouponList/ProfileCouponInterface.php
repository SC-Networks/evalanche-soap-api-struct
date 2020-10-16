<?php

namespace Scn\EvalancheSoapStruct\Struct\CouponList;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Represents an Evalanche CouponList profile coupon
 */
interface ProfileCouponInterface extends StructInterface
{
    public function getId(): int;

    public function getCode(): string;

    public function setCode(string $code): ProfileCouponInterface;

    public function getProfileId(): int;

    public function setProfileId(int $profileId): ProfileCouponInterface;

    public function getCreationDate(): int;

    public function setCreationDate(int $creationDate): ProfileCouponInterface;

    public function getValidTo(): int;
}