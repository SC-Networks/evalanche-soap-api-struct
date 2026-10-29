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
                $this->createStub(HashMapItemInterface::class),
                $this->createStub(HashMapItemInterface::class),
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
            $this->createStub(HashMapItemInterface::class),
            $this->createStub(HashMapItemInterface::class),
            $this->createStub(HashMapItemInterface::class),
        ];

        self::assertContainsOnlyInstancesOf(HashMapItemInterface::class, $this->subject->setItems($hashMapItems)->getItems());
    }
}
