<?php

namespace Scn\EvalancheSoapStruct\Factory;

use Scn\EvalancheSoapStruct\Struct\Generic\HashMapInterface;
use Scn\EvalancheSoapStruct\StructTestCase;

class StructFactoryTest extends StructTestCase
{
    public function testCreateHashMapCanReturnInstanceOfHashMapInterface(): void
    {
        $sample = [
            'field_name' => 'field_value',
            'field_name_next' => 'field_value_next'
        ];

        $hashMap = StructFactory::createHashMap($sample);

        self::assertInstanceOf(HashMapInterface::class, $hashMap);

        self::assertCount(2, $hashMap->getItems());

        foreach ($hashMap->getItems() as $hashMapItem) {
            self::assertSame($sample[$hashMapItem->getKey()], $hashMapItem->getValue());
        }
    }
}
