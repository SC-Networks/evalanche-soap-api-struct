<?php

namespace Scn\EvalancheSoapStruct\Struct\SmartLink;


/**
 * Represents a smart link pool configuration element.
 *
 * @package Scn\EvalancheSoapStruct\Struct\SmartLink
 */
interface SmartLinkPoolConfigurationInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return int
     */
    public function getPoolId(): int;

    /**
     * @return int
     */
    public function getPoolAttributeId(): int;

    /**
     * @return string
     */
    public function getValue(): string;

    /**
     * @return bool
     */
    public function getIsMerge(): bool;
}