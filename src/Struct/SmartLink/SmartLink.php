<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\SmartLink;

use Scn\EvalancheSoapStruct\Struct\StructJsonSerializeTrait;

/**
 * Represents a smart link element.
 * Contains information about its id, name and tracking url.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Smartlink
 */
class SmartLink implements SmartLinkInterface
{
    use StructJsonSerializeTrait;

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