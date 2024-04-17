<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

/**
 * Evalanche object like mailing, image, template, etc.
 */
class ResourceInformation implements ResourceInformationInterface
{
    public function __construct(
        private readonly int $id,
        private readonly string $name,
        private readonly string $url,
        private readonly int $typeId,
        private readonly int $folderId,
        private readonly int $mandatorId,
        private readonly int $lastModified,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getTypeId(): int
    {
        return $this->typeId;
    }

    public function getFolderId(): int
    {
        return $this->folderId;
    }

    public function getMandatorId(): int
    {
        return $this->mandatorId;
    }

    public function getLastModified(): int
    {
        return $this->lastModified;
    }
}
