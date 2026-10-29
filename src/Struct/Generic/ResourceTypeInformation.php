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

    public function __construct(int $id = 0, string $description = '')
    {
        $this->id = $id;
        $this->description = $description;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
