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

    public function setUp()
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

    public function testGetClientsCanReturnArrayOfMailClientStatisticItem()
    {
        $this->assertCount(2, $this->subject->getClients());
        $this->assertContainsOnlyInstancesOf(
            MailClientStatisticItemInterface::class,
            $this->subject->getClients()
        );
    }

    public function testGetBrowsersCanReturnArrayOfBrowserStatisticItem()
    {
        $this->assertCount(2, $this->subject->getBrowsers());
        $this->assertContainsOnlyInstancesOf(
            BrowserStatisticItemInterface::class,
            $this->subject->getBrowsers()
        );
    }

    public function testGetClientsCanReturnArrayOfDevicesStatisticItem()
    {
        $this->assertCount(2, $this->subject->getDevices());
        $this->assertContainsOnlyInstancesOf(
            DeviceStatisticItemInterface::class,
            $this->subject->getDevices()
        );
    }
}
