<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Container;

/**
 * Class ContainerAttributeOption
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

    /**
     * @param int $id
     * @param string $name
     * @param string $label
     * @param int $order
     */
    public function __construct(int $id = null, string $name = null, string $label = null, int $order = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->order = $order;
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
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @return int
     */
    public function getOrder(): int
    {
        return $this->order;
    }
}