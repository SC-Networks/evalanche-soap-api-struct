<?php

namespace Scn\EvalancheSoapStruct\Struct\Blacklist;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface BlackListInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Blacklist
 */
interface BlackListInterface extends StructInterface
{
    /**
     * @return int
     */
    public function getMandatorId(): int;

    /**
     * @return BlackListItemInterface[]
     */
    public function getItems(): array;
}
