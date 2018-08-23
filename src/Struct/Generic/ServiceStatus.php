<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

/**
 * Class ServiceStatus
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

    /**
     * @param string $status
     * @param string $randomMessage
     */
    public function __construct(string $status = null, string $randomMessage = null)
    {
        $this->status = $status;
        $this->randomMessage = $randomMessage;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getRandomMessage(): string
    {
        return $this->randomMessage;
    }
}