<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

/**
 * Id and description of an Evalanche object's type
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class ResourceTypeInformation implements ResourceTypeInformationInterface
{
    public function __construct(
        private null|int $id = null,
        private null|string $description = null
    ) {
    }

    public function getId(): int
    {
        return (int) $this->id;
    }

    public function getDescription(): string
    {
        return (string) $this->description;
    }
}
