<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

/**
 * Evalanche object like mailing, image, template, etc.
 */
class ResourceInformation implements ResourceInformationInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $url;

    /**
     * @var int
     */
    private $typeId;

    /**
     * @var int
     */
    private $folderId;

    /**
     * @var int
     */
    private $mandatorId;

    /**
     * @var int
     */
    private $lastModified;

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
