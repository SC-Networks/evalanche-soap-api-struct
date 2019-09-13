<?php

namespace Scn\EvalancheSoapStruct\Struct\Profile;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface ProfileTrackingHistoryInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Profile
 */
interface ProfileTrackingHistoryInterface extends StructInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return int
     */
    public function getResourceId(): int;

    /**
     * @return string
     */
    public function getResourceName(): string;

    /**
     * @return int
     */
    public function getResourceTypeId(): int;

    /**
     * @return int
     */
    public function getSubResourceId(): int;

    /**
     * @return string
     */
    public function getSubResourceName(): string;

    /**
     * @return int
     */
    public function getSubResourceTypeId(): int;

    /**
     * @return string
     */
    public function getSubUrl(): string;

    /**
     * @return int
     */
    public function getProfileId(): int;

    /**
     * @return int
     */
    public function getType(): int;

    /**
     * @return int
     */
    public function getTimestamp(): int;

    /**
     * @return string
     */
    public function getReferrerDomain(): string;
}
