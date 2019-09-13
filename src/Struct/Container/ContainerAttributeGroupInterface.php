<?php

namespace Scn\EvalancheSoapStruct\Struct\Container;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface ContainerAttributeGroupInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
interface ContainerAttributeGroupInterface extends StructInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return int
     */
    public function getSortOrder(): int;
}
