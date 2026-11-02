<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\SmartLink;

/**
 * Represents a smart link pool configuration element.
 *
 * @package Scn\EvalancheSoapStruct\Struct\SmartLink
 */
class SmartLinkPoolConfiguration implements SmartLinkPoolConfigurationInterface
{
    public function __construct(
        private null|int $id = null,
        private null|int $poolId = null,
        private null|int $poolAttributeId = null,
        private null|string $value = null,
        private null|bool $isMerge = null
    ) {
    }

    public function getId(): int
    {
        return (int) $this->id;
    }

    public function getPoolId(): int
    {
        return (int) $this->poolId;
    }

    public function getPoolAttributeId(): int
    {
        return (int) $this->poolAttributeId;
    }

    public function getValue(): string
    {
        return (string) $this->value;
    }

    public function getIsMerge(): bool
    {
        return (bool) $this->isMerge;
    }
}
