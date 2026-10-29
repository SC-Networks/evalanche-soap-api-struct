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
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $scoringGroupId;

    /**
     * @var int
     */
    private $scoringTypeId;

    /**
     * @var int
     */
    private $timestamp;

    /**
     * @var int
     */
    private $score;

    /**
     * @var int
     */
    private $resourceId;

    public function __construct(
        int $id = null,
        int $scoringGroupId = null,
        int $scoringTypeId = null,
        int $timestamp = null,
        int $score = null,
        int $resourceId = null
    ) {
        $this->id = $id;
        $this->scoringGroupId = $scoringGroupId;
        $this->scoringTypeId = $scoringTypeId;
        $this->timestamp = $timestamp;
        $this->score = $score;
        $this->resourceId = $resourceId;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getScoringGroupId(): int
    {
        return $this->scoringGroupId;
    }

    public function getScoringTypeId(): int
    {
        return $this->scoringTypeId;
    }

    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    public function getScore(): int
    {
        return $this->score;
    }

    public function getResourceId(): int
    {
        return $this->resourceId;
    }
}
