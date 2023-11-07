<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\CouponList;

/**
 * Represents an Evalanche CouponList profile coupon
 */
class ProfileCoupon implements ProfileCouponInterface
{
    /** @var int internal id (readonly) */
    public $id = 0;

    /** @var string The actual coupon code */
    public $code;

    /** @var int The associated profile id */
    public $profileId;

    /** @var int The creation date */
    public $creationDate;

    /** @var int The expiration date (readonly) */
    public $validTo = 0;

    public function __construct(
        string $code = '',
        int $profileId = 0,
        int $creationDate = 0
    ) {
        $this->code = $code;
        $this->profileId = $profileId;
        $this->creationDate = $creationDate;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): ProfileCouponInterface
    {
        $this->code = $code;

        return $this;
    }

    public function getProfileId(): int
    {
        return $this->profileId;
    }

    public function setProfileId(int $profileId): ProfileCouponInterface
    {
        $this->profileId = $profileId;

        return $this;
    }

    public function getCreationDate(): int
    {
        return $this->creationDate;
    }

    public function setCreationDate(int $creationDate): ProfileCouponInterface
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getValidTo(): int
    {
        return $this->validTo;
    }
}
