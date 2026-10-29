<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

/**
 * Holds an alphanumeric value by an alphanumeric key
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class HashMapItem implements HashMapItemInterface
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $value;

    public function __construct(string $key = '', string $value = '')
    {
        $this->key = $key;
        $this->value = $value;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): HashMapItemInterface
    {
        $this->value = $value;
        return $this;
    }
}
