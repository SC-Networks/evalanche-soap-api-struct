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
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $poolId;

    /**
     * @var int
     */
    private $poolAttributeId;

    /**
     * @var string
     */
    private $value;

    /**
     * @var bool
     */
    private $isMerge;

    public function __construct(
        int $id = 0,
        int $poolId = 0,
        int $poolAttributeId = 0,
        string $value = '',
        bool $isMerge = false
    ) {
        $this->id = $id;
        $this->poolId = $poolId;
        $this->poolAttributeId = $poolAttributeId;
        $this->value = $value;
        $this->isMerge = $isMerge;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getPoolId(): int
    {
        return $this->poolId;
    }

    public function getPoolAttributeId(): int
    {
        return $this->poolAttributeId;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function getIsMerge(): bool
    {
        return $this->isMerge;
    }
}
