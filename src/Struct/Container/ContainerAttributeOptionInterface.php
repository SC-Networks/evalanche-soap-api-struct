<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Container;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface ContainerAttributeOptionInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
interface ContainerAttributeOptionInterface extends StructInterface
{
    public function getId(): int;

    public function getName(): string;

    public function getLabel(): string;

    public function getOrder(): int;
}
