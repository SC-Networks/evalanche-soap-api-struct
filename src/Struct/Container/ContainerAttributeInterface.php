<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Container;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface ContainerAttributeInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
interface ContainerAttributeInterface extends StructInterface
{
    public function getId(): int;

    public function getName(): string;

    public function getLabel(): string;

    public function getTypeId(): int;

    public function getGroupId(): int;

    public function getHelpText(): string;

    public function getInputHelpText(): string;

    public function getMandatory(): bool;

    public function getVisible(): bool;

    public function getReplacementVariable(): string;

    public function getAllowOptions(): bool;
}
