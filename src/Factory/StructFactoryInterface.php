<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Factory;

use Scn\EvalancheSoapStruct\Struct\Generic\HashMapInterface;

interface StructFactoryInterface
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
     * @param array<array-key, string|null> $items
     */
    public static function createHashMap(array $items): HashMapInterface;
}
