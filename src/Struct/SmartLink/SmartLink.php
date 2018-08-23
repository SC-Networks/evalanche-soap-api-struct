<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\SmartLink;

/**
 * Class SmartLink
 *
 * @package Scn\EvalancheSoapStruct\Struct\Smartlink
 */
class SmartLink implements SmartLinkInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $trackingUrl;

    /**
     * @param int $id
     * @param string $name
     * @param string $trackingUrl
     */
    public function __construct(int $id = null, string $name = null, string $trackingUrl = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->trackingUrl = $trackingUrl;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getTrackingUrl(): string
    {
        return $this->trackingUrl;
    }
}