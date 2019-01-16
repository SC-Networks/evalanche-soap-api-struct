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

    /**
     * @param int $id
     * @param int $resourceId
     * @param string $resourceName
     * @param int $resourceTypeId
     * @param int $subResourceId
     * @param string $subResourceName
     * @param int $subResourceTypeId
     * @param string $subUrl
     * @param int $profileId
     * @param int $type
     * @param int $timestamp
     * @param int $referrerDomain
     */
    public function __construct(
        int $id = null,
        int $resourceId = null,
        string $resourceName = null,
        int $resourceTypeId = null,
        int $subResourceId = null,
        string $subResourceName = null,
        int $subResourceTypeId = null,
        string $subUrl = null,
        int $profileId = null,
        int $type = null,
        int $timestamp = null,
        string $referrerDomain = null
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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getResourceId(): int
    {
        return $this->resourceId;
    }

    /**
     * @return string
     */
    public function getResourceName(): string
    {
        return $this->resourceName;
    }

    /**
     * @return int
     */
    public function getResourceTypeId(): int
    {
        return $this->resourceTypeId;
    }

    /**
     * @return int
     */
    public function getSubResourceId(): int
    {
        return $this->subResourceId;
    }

    /**
     * @return string
     */
    public function getSubResourceName(): string
    {
        return $this->subResourceName;
    }

    /**
     * @return int
     */
    public function getSubResourceTypeId(): int
    {
        return $this->subResourceTypeId;
    }

    /**
     * @return string
     */
    public function getSubUrl(): string
    {
        return $this->subUrl;
    }

    /**
     * @return int
     */
    public function getProfileId(): int
    {
        return $this->profileId;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    /**
     * @return string
     */
    public function getReferrerDomain(): string
    {
        return $this->referrerDomain;
    }
}