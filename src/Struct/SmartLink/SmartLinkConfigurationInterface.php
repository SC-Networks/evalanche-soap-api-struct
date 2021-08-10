<?php

namespace Scn\EvalancheSoapStruct\Struct\SmartLink;


/**
 * Represents a smart link configuration element.
 *
 * @package Scn\EvalancheSoapStruct\Struct\SmartlinkLinkConfiguration
 */
interface SmartLinkConfigurationInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return string
     */
    public function getTargetUrl(): string;

    /**
     * @return bool
     */
    public function getIndividualScoringConfig(): bool;

    /**
     * @return int
     */
    public function getRestrictionTargetGroupId(): int;

    /**
     * @return array
     */
    public function getRestrictionUserAgents(): array;

    /**
     * @return int
     */
    public function getMilestoneId(): int;

    /**
     * @return bool
     */
    public function getActivateRedirect(): bool;

    /**
     * @return bool
     */
    public function getActivateProfileUpdate(): bool;

    /**
     * @return bool
     */
    public function getActivateTracking(): bool;

    /**
     * @return array
     */
    public function getScoringConfigs(): array;

    /**
     * @return array
     */
    public function getPoolAttributes(): array;
}