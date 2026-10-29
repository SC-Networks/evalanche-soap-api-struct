<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Blacklist;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface BlackListInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Blacklist
 */
interface BlackListInterface extends StructInterface
{
    public function getMandatorId(): int;

    /**
     * @return BlackListItemInterface[]
     */
    public function getItems(): array;
}
