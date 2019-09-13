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
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $description;

    /**
     * @param int $id
     * @param string $description
     */
    public function __construct(int $id = null, string $description = null)
    {
        $this->id = $id;
        $this->description = $description;
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
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}
