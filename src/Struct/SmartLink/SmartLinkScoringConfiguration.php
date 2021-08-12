<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\SmartLink;

/**
 * Represents a smart link scoring configuration element.
 *
 * @package Scn\EvalancheSoapStruct\Struct\SmartLink
 */
class SmartLinkScoringConfiguration implements SmartLinkScoringConfigurationInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $value;

    /**
     * @var int
     */
    private $multipleScoreTimeThreshold;

    /**
     * @var int
     */
    private $scoringGroupId;

    /**
     * @var int
     */
    private $type;

    /**
     * @param int $id
     * @param string $name
     * @param int $value
     * @param int $multipleScoreTimeThreshold
     * @param int $scoringGroupId
     * @param int $type
     */
    public function __construct(
        int $id = null,
        string $name = null,
        int $value = null,
        int $multipleScoreTimeThreshold = null,
        int $scoringGroupId = null,
        int $type = null
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->value = $value;
        $this->multipleScoreTimeThreshold = $multipleScoreTimeThreshold;
        $this->scoringGroupId = $scoringGroupId;
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @return int
     */
    public function getMultipleScoreTimeThreshold(): int
    {
        return $this->multipleScoreTimeThreshold;
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
    public function getType(): int
    {
        return $this->type;
    }
}
