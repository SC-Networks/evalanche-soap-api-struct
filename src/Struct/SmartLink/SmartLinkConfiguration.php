<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\SmartLink;

/**
 * Represents a smart link configuration element.
 *
 * @package Scn\EvalancheSoapStruct\Struct\SmartLink
 */
class SmartLinkConfiguration implements SmartLinkConfigurationInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $targetUrl;

    /**
     * @var bool
     */
    private $individualScoringConfig;

    /**
     * @var int
     */
    private $restrictionTargetGroupId;

    /**
     * @var array
     */
    private $restrictionUserAgents;

    /**
     * @var int
     */
    private $milestoneId;

    /**
     * @var bool
     */
    private $activateRedirect;

    /**
     * @var bool
     */
    private $activateProfileUpdate;

    /**
     * @var bool
     */
    private $activateTracking;

    /**
     * @var array
     */
    private $scoringConfigs;

    /**
     * @var array
     */
    private $poolAttributes;

    public function __construct(
        int $id = null,
        string $targetUrl = null,
        bool $individualScoringConfig = null,
        int $restrictionTargetGroupId = null,
        array $restrictionUserAgents = null,
        int $milestoneId = null,
        bool $activateRedirect = null,
        bool $activateProfileUpdate = null,
        bool $activateTracking = null,
        array $scoringConfigs = null,
        array $poolAttributes = null
    ) {
        $this->id = $id;
        $this->targetUrl = $targetUrl;
        $this->individualScoringConfig = $individualScoringConfig;
        $this->restrictionTargetGroupId = $restrictionTargetGroupId;
        $this->restrictionUserAgents = $restrictionUserAgents;
        $this->milestoneId = $milestoneId;
        $this->activateRedirect = $activateRedirect;
        $this->activateProfileUpdate = $activateProfileUpdate;
        $this->activateTracking = $activateTracking;
        $this->scoringConfigs = $scoringConfigs;
        $this->poolAttributes = $poolAttributes;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTargetUrl(): string
    {
        return $this->targetUrl;
    }

    public function getIndividualScoringConfig(): bool
    {
        return $this->individualScoringConfig;
    }

    public function getRestrictionTargetGroupId(): int
    {
        return $this->restrictionTargetGroupId;
    }

    public function getRestrictionUserAgents(): array
    {
        return $this->restrictionUserAgents;
    }

    public function getMilestoneId(): int
    {
        return $this->milestoneId;
    }

    public function getActivateRedirect(): bool
    {
        return $this->activateRedirect;
    }

    public function getActivateProfileUpdate(): bool
    {
        return $this->activateProfileUpdate;
    }

    public function getActivateTracking(): bool
    {
        return $this->activateTracking;
    }

    public function getScoringConfigs(): array
    {
        return $this->scoringConfigs;
    }

    public function getPoolAttributes(): array
    {
        return $this->poolAttributes;
    }
}
