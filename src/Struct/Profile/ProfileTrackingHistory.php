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

    public function __construct(
        private null|int $id = null,
        private null|int $resourceId = null,
        private null|string $resourceName = null,
        private null|int $resourceTypeId = null,
        private null|int $subResourceId = null,
        private null|string $subResourceName = null,
        private null|int $subResourceTypeId = null,
        private null|string $subUrl = null,
        private null|int $profileId = null,
        private null|int $type = null,
        private null|int $timestamp = null,
        private null|string $referrerDomain = null
    ) {
    }

    public function getId(): int
    {
        return (int) $this->id;
    }

    public function getResourceId(): int
    {
        return (int) $this->resourceId;
    }

    public function getResourceName(): string
    {
        return (string) $this->resourceName;
    }

    public function getResourceTypeId(): int
    {
        return (int) $this->resourceTypeId;
    }

    public function getSubResourceId(): int
    {
        return (int) $this->subResourceId;
    }

    public function getSubResourceName(): string
    {
        return (string) $this->subResourceName;
    }

    public function getSubResourceTypeId(): int
    {
        return (int) $this->subResourceTypeId;
    }

    public function getSubUrl(): string
    {
        return (string) $this->subUrl;
    }

    public function getProfileId(): int
    {
        return (int) $this->profileId;
    }

    public function getType(): int
    {
        return (int) $this->type;
    }

    public function getTimestamp(): int
    {
        return (int) $this->timestamp;
    }

    public function getReferrerDomain(): string
    {
        return (string) $this->referrerDomain;
    }
}
