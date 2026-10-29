<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Container;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface ContainerAttributeGroupInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
interface ContainerAttributeGroupInterface extends StructInterface
{
    public function getId(): int;

    public function getName(): string;

    public function getSortOrder(): int;
}
