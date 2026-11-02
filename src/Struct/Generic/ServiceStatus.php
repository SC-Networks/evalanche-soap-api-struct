<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

/**
 * Availability of a particular service
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class ServiceStatus implements ServiceStatusInterface
{
    public function __construct(
        private null|string $status = null,
        private null|string $randomMessage = null
    ) {
    }

    public function getStatus(): string
    {
        return (string) $this->status;
    }

    public function getRandomMessage(): string
    {
        return (string) $this->randomMessage;
    }
}
