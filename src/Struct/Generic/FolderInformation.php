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
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $parentId;

    /**
     * @param int $id
     * @param string $name
     */
    public function __construct(int $id = null, string $name = null, int $parentId = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->parentId = $parentId;
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
     * @return int
     */
    public function getParentId(): int
    {
        return $this->parentId;
    }
}
