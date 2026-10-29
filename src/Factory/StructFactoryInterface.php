<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Factory;

use Scn\EvalancheSoapStruct\Struct\Generic\HashMapInterface;

interface StructFactoryInterface
{
    public static function createHashMap(array $items): HashMapInterface;
}
