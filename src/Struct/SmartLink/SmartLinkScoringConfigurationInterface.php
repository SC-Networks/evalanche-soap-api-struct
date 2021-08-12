<?php

namespace Scn\EvalancheSoapStruct\Struct\SmartLink;

/**
 * Represents a smart link scoring configuration element.
 *
 * @package Scn\EvalancheSoapStruct\Struct\SmartLink
 */
interface SmartLinkScoringConfigurationInterface
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