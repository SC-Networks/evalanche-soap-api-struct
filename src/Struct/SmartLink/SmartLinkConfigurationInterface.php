<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\SmartLink;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Represents a smart link configuration element.
 *
 * @package Scn\EvalancheSoapStruct\Struct\SmartlinkLinkConfiguration
 */
interface SmartLinkConfigurationInterface extends StructInterface
{
    public function getId(): int;

    public function getTargetUrl(): string;

    public function getIndividualScoringConfig(): bool;

    public function getRestrictionTargetGroupId(): int;

    public function getRestrictionUserAgents(): array;

    public function getMilestoneId(): int;

    public function getActivateRedirect(): bool;

    public function getActivateProfileUpdate(): bool;

    public function getActivateTracking(): bool;

    public function getScoringConfigs(): array;

    public function getPoolAttributes(): array;
}
