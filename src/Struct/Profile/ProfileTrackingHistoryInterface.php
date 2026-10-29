<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Profile;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface ProfileTrackingHistoryInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Profile
 */
interface ProfileTrackingHistoryInterface extends StructInterface
{
    public function getId(): int;

    public function getResourceId(): int;

    public function getResourceName(): string;

    public function getResourceTypeId(): int;

    public function getSubResourceId(): int;

    public function getSubResourceName(): string;

    public function getSubResourceTypeId(): int;

    public function getSubUrl(): string;

    public function getProfileId(): int;

    public function getType(): int;

    public function getTimestamp(): int;

    public function getReferrerDomain(): string;
}
