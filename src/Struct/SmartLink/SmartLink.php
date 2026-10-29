<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\SmartLink;

/**
 * Represents a smart link element.
 * Contains information about its id, name and tracking url.
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

    public function __construct(int $id = null, string $name = null, string $trackingUrl = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->trackingUrl = $trackingUrl;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTrackingUrl(): string
    {
        return $this->trackingUrl;
    }
}
