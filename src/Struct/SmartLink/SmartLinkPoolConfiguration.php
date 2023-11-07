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

    /**
     * @param int $id
     * @param int $poolId
     * @param int $poolAttributeId
     * @param string $value
     * @param bool $isMerge
     */
    public function __construct(
        int $id = null,
        int $poolId = null,
        int $poolAttributeId = null,
        string $value = null,
        bool $isMerge = null
    ) {
        $this->id = $id;
        $this->poolId = $poolId;
        $this->poolAttributeId = $poolAttributeId;
        $this->value = $value;
        $this->isMerge = $isMerge;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getPoolId(): int
    {
        return $this->poolId;
    }

    /**
     * @return int
     */
    public function getPoolAttributeId(): int
    {
        return $this->poolAttributeId;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @return bool
     */
    public function getIsMerge(): bool
    {
        return $this->isMerge;
    }
}
