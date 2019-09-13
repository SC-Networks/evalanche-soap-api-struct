<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

/**
 * Represents a client statistic.
 * Contains Information about Mail Client Statistic Items, Browser Statistic Items and Device Statistic Items.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
class ClientStatistic implements ClientStatisticInterface
{
    /**
     * @var MailClientStatisticItem[]
     */
    private $clients;

    /**
     * @var BrowserStatisticItem[]
     */
    private $browsers;

    /**
     * @var DeviceStatisticItem[]
     */
    private $devices;

    /**
     * @param MailClientStatisticItemInterface[] $clients
     * @param BrowserStatisticItemInterface[] $browsers
     * @param DeviceStatisticItemInterface[] $devices
     */
    public function __construct(array $clients = null, array $browsers = null, array $devices = null)
    {
        $this->clients = $clients;
        $this->browsers = $browsers;
        $this->devices = $devices;
    }

    /**
     * @return MailClientStatisticItemInterface[]
     */
    public function getClients(): array
    {
        return $this->clients;
    }

    /**
     * @return BrowserStatisticItemInterface[]
     */
    public function getBrowsers(): array
    {
        return $this->browsers;
    }

    /**
     * @return DeviceStatisticItemInterface[]
     */
    public function getDevices(): array
    {
        return $this->devices;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}