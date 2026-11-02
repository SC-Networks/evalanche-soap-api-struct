<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

/**
 * Standard folder of an object class
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class FolderInformation implements FolderInformationInterface
{
    public function __construct(
        private null|int $id = null,
        private null|string $name = null,
        private null|int $parentId = null
    ) {
    }

    public function getId(): int
    {
        return (int) $this->id;
    }

    public function getName(): string
    {
        return (string) $this->name;
    }

    public function getParentId(): int
    {
        return (int) $this->parentId;
    }
}
