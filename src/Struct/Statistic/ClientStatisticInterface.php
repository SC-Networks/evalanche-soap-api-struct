<?php

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface ClientStatisticInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
interface ClientStatisticInterface extends StructInterface
{
    /**
     * @return MailClientStatisticItemInterface[]
     */
    public function getClients(): array;

    /**
     * @return BrowserStatisticItemInterface[]
     */
    public function getBrowsers(): array;

    /**
     * @return DeviceStatisticItemInterface[]
     */
    public function getDevices(): array;
}
