<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\SmartLink;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Represents a smart link pool configuration element.
 *
 * @package Scn\EvalancheSoapStruct\Struct\SmartLink
 */
interface SmartLinkPoolConfigurationInterface extends StructInterface
{
    public function getId(): int;

    public function getPoolId(): int;

    public function getPoolAttributeId(): int;

    public function getValue(): string;

    public function getIsMerge(): bool;
}
