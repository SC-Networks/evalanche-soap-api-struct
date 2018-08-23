<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Profile;

/**
 * Class ProfileActivityScore
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

    /**
     * @param int $id
     * @param int $scoringGroupId
     * @param int $scoringTypeId
     * @param int $timestamp
     * @param int $score
     * @param int $resourceId
     */
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
    public function getScoringGroupId(): int
    {
        return $this->scoringGroupId;
    }

    /**
     * @return int
     */
    public function getScoringTypeId(): int
    {
        return $this->scoringTypeId;
    }

    /**
     * @return int
     */
    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    /**
     * @return int
     */
    public function getScore(): int
    {
        return $this->score;
    }

    /**
     * @return int
     */
    public function getResourceId(): int
    {
        return $this->resourceId;
    }
}