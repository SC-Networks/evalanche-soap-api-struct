<?php

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class ClientStatisticTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
class ClientStatisticTest extends StructTestCase
{
    /**
     * @var ClientStatistic
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new ClientStatistic(
            [
                $this->getMockBuilder(MailClientStatisticItemInterface::class)->getMock(),
                $this->getMockBuilder(MailClientStatisticItemInterface::class)->getMock(),
            ],
            [
                $this->getMockBuilder(BrowserStatisticItemInterface::class)->getMock(),
                $this->getMockBuilder(BrowserStatisticItemInterface::class)->getMock(),
            ],
            [
                $this->getMockBuilder(DeviceStatisticItemInterface::class)->getMock(),
                $this->getMockBuilder(DeviceStatisticItemInterface::class)->getMock(),
            ]
        );
    }

    public function testGetClientsCanReturnArrayOfMailClientStatisticItem(): void
    {
        self::assertCount(2, $this->subject->getClients());
        self::assertContainsOnlyInstancesOf(MailClientStatisticItemInterface::class, $this->subject->getClients());
    }

    public function testGetBrowsersCanReturnArrayOfBrowserStatisticItem(): void
    {
        self::assertCount(2, $this->subject->getBrowsers());
        self::assertContainsOnlyInstancesOf(BrowserStatisticItemInterface::class, $this->subject->getBrowsers());
    }

    public function testGetClientsCanReturnArrayOfDevicesStatisticItem(): void
    {
        self::assertCount(2, $this->subject->getDevices());
        self::assertContainsOnlyInstancesOf(DeviceStatisticItemInterface::class, $this->subject->getDevices());
    }
}
