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
     * @param array<int, int> $restrictionUserAgents
     * @param list<SmartLinkScoringConfigurationInterface> $scoringConfigs
     * @param list<SmartLinkPoolConfigurationInterface> $poolAttributes
     */
    public function __construct(
        private null|int $id = null,
        private null|string $targetUrl = null,
        private null|bool $individualScoringConfig = null,
        private null|int $restrictionTargetGroupId = null,
        private array $restrictionUserAgents = [],
        private null|int $milestoneId = null,
        private null|bool $activateRedirect = null,
        private null|bool $activateProfileUpdate = null,
        private null|bool $activateTracking = null,
        private array $scoringConfigs = [],
        private array $poolAttributes = []
    ) {
    }

    public function getId(): int
    {
        return (int) $this->id;
    }

    public function getTargetUrl(): string
    {
        return (string) $this->targetUrl;
    }

    public function getIndividualScoringConfig(): bool
    {
        return (bool) $this->individualScoringConfig;
    }

    public function getRestrictionTargetGroupId(): int
    {
        return (int) $this->restrictionTargetGroupId;
    }

    /** @inheritDoc */
    public function getRestrictionUserAgents(): array
    {
        return $this->restrictionUserAgents;
    }

    public function getMilestoneId(): int
    {
        return (int) $this->milestoneId;
    }

    public function getActivateRedirect(): bool
    {
        return (bool) $this->activateRedirect;
    }

    public function getActivateProfileUpdate(): bool
    {
        return (bool) $this->activateProfileUpdate;
    }

    public function getActivateTracking(): bool
    {
        return (bool) $this->activateTracking;
    }

    /** @inheritDoc */
    public function getScoringConfigs(): array
    {
        return $this->scoringConfigs;
    }

    /** @inheritDoc */
    public function getPoolAttributes(): array
    {
        return $this->poolAttributes;
    }
}
