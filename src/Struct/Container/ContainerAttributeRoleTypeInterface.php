<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Container;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface ContainerAttributeRoleTypeInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Container
 */
interface ContainerAttributeRoleTypeInterface extends StructInterface
{
    public function getId(): int;

    public function getName(): string;
}
