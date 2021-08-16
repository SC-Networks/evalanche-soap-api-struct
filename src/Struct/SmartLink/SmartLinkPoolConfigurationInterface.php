<?php

namespace Scn\EvalancheSoapStruct\Struct\SmartLink;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Represents a smart link pool configuration element.
 *
 * @package Scn\EvalancheSoapStruct\Struct\SmartLink
 */
interface SmartLinkPoolConfigurationInterface extends StructInterface
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