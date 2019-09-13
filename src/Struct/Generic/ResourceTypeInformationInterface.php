<?php

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface ResourceTypeInformationInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
interface ResourceTypeInformationInterface extends StructInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return string
     */
    public function getDescription(): string;
}
