<?php

namespace Scn\EvalancheSoapStruct\Factory;


use Scn\EvalancheSoapStruct\Struct\Generic\HashMapInterface;
use Scn\EvalancheSoapStruct\StructTestCase;

class StructFactoryTest extends StructTestCase
{

    public function testCreateHashMapCanReturnInstanceOfHashMapInterface()
    {
        $sample = [
            'field_name' => 'field_value',
            'field_name_next' => 'field_value_next'
        ];

        $hashMap = StructFactory::createHashMap($sample);

        $this->assertInstanceOf(
            HashMapInterface::class,
            $hashMap
        );

        $this->assertCount(
          2,
            $hashMap->getItems()
        );

        foreach ($hashMap->getItems() as $hashMapItem) {
            $this->assertSame($sample[$hashMapItem->getKey()], $hashMapItem->getValue());
        }
    }
}
