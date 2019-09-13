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
     * @param int $id
     * @param string $name
     */
    public function __construct(int $id = null, string $name = null)
    {
        $this->id = $id;
        $this->name = $name;
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
     * @return array
     */
    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}
