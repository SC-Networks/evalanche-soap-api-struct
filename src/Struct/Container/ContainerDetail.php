<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Container;

/**
 * Contains detailed information about a specific container
 *
 * @package Scn\EvalancheSoapStruct\Struct\Container
 */
class ContainerDetail implements ContainerDetailInterface
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
    private $containerTypeId;

    /**
     * @param int $id
     * @param string $name
     * @param string $url
     * @param int $typeId
     * @param int $folderId
     * @param int $mandatorId
     * @param int $containerTypeId
     */
    public function __construct(
        int $id = null,
        string $name = null,
        string $url = null,
        int $typeId = null,
        int $folderId = null,
        int $mandatorId = null,
        int $containerTypeId = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->url = $url;
        $this->typeId = $typeId;
        $this->folderId = $folderId;
        $this->mandatorId = $mandatorId;
        $this->containerTypeId = $containerTypeId;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return int
     */
    public function getTypeId(): int
    {
        return $this->typeId;
    }

    /**
     * @return int
     */
    public function getFolderId(): int
    {
        return $this->folderId;
    }

    /**
     * @return int
     */
    public function getMandatorId(): int
    {
        return $this->mandatorId;
    }

    /**
     * @return int
     */
    public function getContainerTypeId(): int
    {
        return $this->containerTypeId;
    }
}
