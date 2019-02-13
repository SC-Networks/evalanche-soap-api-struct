<?php declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Factory;

use Scn\EvalancheSoapStruct\Struct\Generic\HashMap;
use Scn\EvalancheSoapStruct\Struct\Generic\HashMapInterface;
use Scn\EvalancheSoapStruct\Struct\Generic\HashMapItem;

/**
 * Struct Factory, creates Instances of StructInterface
 */
final class StructFactory implements StructFactoryInterface
{
    /**
     * Creates a Instance of HashMap
     *
     * [
     *  'field_name' => 'field_value',
     *  'field_name_next' => 'field_value_next',
     * ]
     *
     * Field names can be found in your pool configuration.
     *
     * @param array $items
     * @return HashMapInterface
     */
    public static function createHashMap(array $items): HashMapInterface {
        $hashMapItems = [];

        foreach ($items as $itemKey => $itemValue) {
            $hashMapItems[] = new HashMapItem($itemKey, $itemValue);
        }

        return new HashMap($hashMapItems);
    }
}