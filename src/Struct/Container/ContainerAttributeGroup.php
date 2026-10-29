<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Container;

/**
 * Represents a group for ContainerAttributes.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class ContainerAttributeGroup implements ContainerAttributeGroupInterface
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
    private $sortOrder;

    public function __construct(int $id = null, string $name = null, int $sortOrder = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->sortOrder = $sortOrder;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSortOrder(): int
    {
        return $this->sortOrder;
    }
}
