<?php

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class HashMapTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class HashMapTest extends StructTestCase
{
    /**
     * @var HashMap
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new HashMap(
            [
                $this->getMockBuilder(HashMapItemInterface::class)->getMock(),
                $this->getMockBuilder(HashMapItemInterface::class)->getMock(),
            ]
        );
    }

    public function testGetItemsCanReturnArray()
    {
        $this->assertContainsOnlyInstancesOf(
            HashMapItemInterface::class,
            $this->subject->getItems()
        );
    }

    public function testSetItemsCanSetArrayOfHashMapItem()
    {
        $hashMapItems = [
            $this->getMockBuilder(HashMapItemInterface::class)->getMock(),
            $this->getMockBuilder(HashMapItemInterface::class)->getMock(),
            $this->getMockBuilder(HashMapItemInterface::class)->getMock(),
        ];

        $this->assertContainsOnlyInstancesOf(
            HashMapItemInterface::class,
            $this->subject->setItems($hashMapItems)->getItems()
        );
    }
}
