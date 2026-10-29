<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Container;

/**
 * Represents one option for ContainerAttributes.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class ContainerAttributeOption implements ContainerAttributeOptionInterface
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
    private $label;

    /**
     * @var int
     */
    private $order;

    public function __construct(int $id = 0, string $name = '', string $label = '', int $order = 0)
    {
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->order = $order;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getOrder(): int
    {
        return $this->order;
    }
}
