<?php

namespace Scn\EvalancheSoapStruct\Struct\Container;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface ContainerAttributeRoleTypeInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Container
 */
interface ContainerAttributeRoleTypeInterface extends StructInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return string
     */
    public function getName(): string;
}
