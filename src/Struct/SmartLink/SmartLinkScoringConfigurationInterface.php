<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\SmartLink;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Represents a smart link scoring configuration element.
 *
 * @package Scn\EvalancheSoapStruct\Struct\SmartLink
 */
interface SmartLinkScoringConfigurationInterface extends StructInterface
{
    public function getId(): int;

    public function getName(): string;

    public function getValue(): int;

    public function getMultipleScoreTimeThreshold(): int;

    public function getScoringGroupId(): int;

    public function getType(): int;
}
