<?php

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\StructTestCase;

class HashMapTest extends StructTestCase
{
    private HashMap $subject;

    public function setUp(): void
    {
        $this->subject = new HashMap(
            [
                $this->getMockBuilder(HashMapItemInterface::class)->getMock(),
                $this->getMockBuilder(HashMapItemInterface::class)->getMock(),
            ]
        );
    }

    public function testGetItemsCanReturnArray(): void
    {
        self::assertContainsOnlyInstancesOf(HashMapItemInterface::class, $this->subject->getItems());
    }

    public function testSetItemsCanSetArrayOfHashMapItem(): void
    {
        $hashMapItems = [
            $this->getMockBuilder(HashMapItemInterface::class)->getMock(),
            $this->getMockBuilder(HashMapItemInterface::class)->getMock(),
            $this->getMockBuilder(HashMapItemInterface::class)->getMock(),
        ];

        self::assertContainsOnlyInstancesOf(HashMapItemInterface::class, $this->subject->setItems($hashMapItems)->getItems());
    }
}
