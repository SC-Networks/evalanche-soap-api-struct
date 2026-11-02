<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Factory;

use Scn\EvalancheSoapStruct\Struct\Generic\HashMap;
use Scn\EvalancheSoapStruct\Struct\Generic\HashMapInterface;
use Scn\EvalancheSoapStruct\Struct\Generic\HashMapItem;

/**
 * Struct Factory, creates Instances of StructInterface
 *
 * @package Scn\EvalancheSoapStruct\Factory\StructFactory
 */
final class StructFactory implements StructFactoryInterface
{
    /** @inheritDoc */
    public static function createHashMap(array $items): HashMapInterface
    {
        $hashMapItems = [];

        foreach ($items as $itemKey => $itemValue) {
            $hashMapItems[] = new HashMapItem($itemKey, $itemValue);
        }

        return new HashMap($hashMapItems);
    }
}
