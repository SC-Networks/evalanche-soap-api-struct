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

    /** @var null|string The actual coupon code */
    public $code;

    /** @var null|int The associated profile id */
    public $profileId;

    /** @var null|int The creation date */
    public $creationDate;

    /** @var int The expiration date (readonly) */
    public $validTo = 0;

    public function __construct(
        null|string $code = null,
        null|int $profileId = null,
        null|int $creationDate = null
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
        return (string) $this->code;
    }

    public function setCode(string $code): ProfileCouponInterface
    {
        $this->code = $code;

        return $this;
    }

    public function getProfileId(): int
    {
        return (int) $this->profileId;
    }

    public function setProfileId(int $profileId): ProfileCouponInterface
    {
        $this->profileId = $profileId;

        return $this;
    }

    public function getCreationDate(): int
    {
        return (int) $this->creationDate;
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
