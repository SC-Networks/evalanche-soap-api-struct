<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Blacklist;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface BlackListItemInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Blacklist
 */
interface BlackListItemInterface extends StructInterface
{
    public function getEmail(): string;

    public function getDescription(): string;
}
