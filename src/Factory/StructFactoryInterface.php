<?php

namespace Scn\EvalancheSoapStruct\Factory;

use Scn\EvalancheSoapStruct\Struct\Generic\HashMapInterface;

interface StructFactoryInterface
{
    public static function createHashMap(array $items): HashMapInterface;
}
