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
     * @param MailClientStatisticItemInterface[] $clients
     * @param BrowserStatisticItemInterface[] $browsers
     * @param DeviceStatisticItemInterface[] $devices
     */
    public function __construct(
        private array $clients = [],
        private array $browsers = [],
        private array $devices = []
    ) {
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
}
