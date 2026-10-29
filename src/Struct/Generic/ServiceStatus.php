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
    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $randomMessage;

    public function __construct(string $status = '', string $randomMessage = '')
    {
        $this->status = $status;
        $this->randomMessage = $randomMessage;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getRandomMessage(): string
    {
        return $this->randomMessage;
    }
}
