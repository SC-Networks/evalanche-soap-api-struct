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

    public function __construct(
        int $id = 0,
        string $name = '',
        int $value = 0,
        int $multipleScoreTimeThreshold = 0,
        int $scoringGroupId = 0,
        int $type = 0
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->value = $value;
        $this->multipleScoreTimeThreshold = $multipleScoreTimeThreshold;
        $this->scoringGroupId = $scoringGroupId;
        $this->type = $type;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function getMultipleScoreTimeThreshold(): int
    {
        return $this->multipleScoreTimeThreshold;
    }

    public function getScoringGroupId(): int
    {
        return $this->scoringGroupId;
    }

    public function getType(): int
    {
        return $this->type;
    }
}
