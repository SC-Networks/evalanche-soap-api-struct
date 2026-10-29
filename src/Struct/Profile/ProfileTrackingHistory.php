<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Profile;

/**
 * Represents a profile tracking history element.
 * Contains information about tracking id, resource id, resource name, resource type id, sub resource id,
 * sub resource name, sub resource type id, sub url, profile id, type id, timestamp and referrer domain.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Profile
 */
class ProfileTrackingHistory implements ProfileTrackingHistoryInterface
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $resourceId;

    /**
     * @var string
     */
    private $resourceName;

    /**
     * @var int
     */
    private $resourceTypeId;

    /**
     * @var int
     */
    private $subResourceId;

    /**
     * @var string
     */
    private $subResourceName;

    /**
     * @var int
     */
    private $subResourceTypeId;

    /**
     * @var string
     */
    private $subUrl;

    /**
     * @var int
     */
    private $profileId;

    /**
     * @var int
     */
    private $type;

    /**
     * @var int
     */
    private $timestamp;

    /**
     * @var string
     */
    private $referrerDomain;

    public function __construct(
        int $id = 0,
        int $resourceId = 0,
        string $resourceName = '',
        int $resourceTypeId = 0,
        int $subResourceId = 0,
        string $subResourceName = '',
        int $subResourceTypeId = 0,
        string $subUrl = '',
        int $profileId = 0,
        int $type = 0,
        int $timestamp = 0,
        string $referrerDomain = ''
    ) {
        $this->id = $id;
        $this->resourceId = $resourceId;
        $this->resourceName = $resourceName;
        $this->resourceTypeId = $resourceTypeId;
        $this->subResourceId = $subResourceId;
        $this->subResourceName = $subResourceName;
        $this->subResourceTypeId = $subResourceTypeId;
        $this->subUrl = $subUrl;
        $this->profileId = $profileId;
        $this->type = $type;
        $this->timestamp = $timestamp;
        $this->referrerDomain = $referrerDomain;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getResourceId(): int
    {
        return $this->resourceId;
    }

    public function getResourceName(): string
    {
        return $this->resourceName;
    }

    public function getResourceTypeId(): int
    {
        return $this->resourceTypeId;
    }

    public function getSubResourceId(): int
    {
        return $this->subResourceId;
    }

    public function getSubResourceName(): string
    {
        return $this->subResourceName;
    }

    public function getSubResourceTypeId(): int
    {
        return $this->subResourceTypeId;
    }

    public function getSubUrl(): string
    {
        return $this->subUrl;
    }

    public function getProfileId(): int
    {
        return $this->profileId;
    }

    public function getType(): int
    {
        return $this->type;
    }

    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    public function getReferrerDomain(): string
    {
        return $this->referrerDomain;
    }
}
