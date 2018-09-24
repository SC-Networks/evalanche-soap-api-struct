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

    /**
     * @param int $id
     * @param string $name
     * @param int $sortOrder
     */
    public function __construct(int $id = null, string $name = null, int $sortOrder = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->sortOrder = $sortOrder;
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
    public function getSortOrder(): int
    {
        return $this->sortOrder;
    }
}
