<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Profile;

/**
 * Provides a profile activity score. Contains information about the Scoring Group Id, Scoring Type Id, Time and Score.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Profile
 */
class ProfileActivityScore implements ProfileActivityScoreInterface
{
    public function __construct(
        private null|int $id = null,
        private null|int $scoringGroupId = null,
        private null|int $scoringTypeId = null,
        private null|int $timestamp = null,
        private null|int $score = null,
        private null|int $resourceId = null
    ) {
    }

    public function getId(): int
    {
        return (int) $this->id;
    }

    public function getScoringGroupId(): int
    {
        return (int) $this->scoringGroupId;
    }

    public function getScoringTypeId(): int
    {
        return (int) $this->scoringTypeId;
    }

    public function getTimestamp(): int
    {
        return (int) $this->timestamp;
    }

    public function getScore(): int
    {
        return (int) $this->score;
    }

    public function getResourceId(): int
    {
        return (int) $this->resourceId;
    }
}
