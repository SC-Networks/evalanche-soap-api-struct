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
    public function __construct(
        private null|int $id = null,
        private null|string $name = null,
        private null|int $value = null,
        private null|int $multipleScoreTimeThreshold = null,
        private null|int $scoringGroupId = null,
        private null|int $type = null
    ) {
    }

    public function getId(): int
    {
        return (int) $this->id;
    }

    public function getName(): string
    {
        return (string) $this->name;
    }

    public function getValue(): int
    {
        return (int) $this->value;
    }

    public function getMultipleScoreTimeThreshold(): int
    {
        return (int) $this->multipleScoreTimeThreshold;
    }

    public function getScoringGroupId(): int
    {
        return (int) $this->scoringGroupId;
    }

    public function getType(): int
    {
        return (int) $this->type;
    }
}
