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
    public function __construct(
        private null|int $id = null,
        private null|string $name = null,
        private null|string $trackingUrl = null
    ) {
    }

    public function getId(): int
    {
        return (int) $this->id;
    }

    public function getName(): string
    {
        return (string) $this->name;
    }

    public function getTrackingUrl(): string
    {
        return (string) $this->trackingUrl;
    }
}
