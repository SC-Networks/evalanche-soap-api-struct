<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Pool;

/**
 * Represents one option of a PoolAttribute.
 * Contains id and value.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Pool
 */
class PoolAttributeOption implements PoolAttributeOptionInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $value;

    /**
     * @param int $id
     * @param string $value
     */
    public function __construct(int $id = null, string $value = null)
    {
        $this->id = $id;
        $this->value = $value;
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
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}
