<?php

namespace Scn\EvalancheSoapStruct\Struct\SmartLink;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Represents a smart link scoring configuration element.
 *
 * @package Scn\EvalancheSoapStruct\Struct\SmartLink
 */
interface SmartLinkScoringConfigurationInterface extends StructInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return int
     */
    public function getValue(): int;

    /**
     * @return int
     */
    public function getMultipleScoreTimeThreshold(): int;

    /**
     * @return int
     */
    public function getScoringGroupId(): int;

    /**
     * @return int
     */
    public function getType(): int;
}
