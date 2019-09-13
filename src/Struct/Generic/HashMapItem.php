<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\Struct\StructJsonSerializeTrait;

/**
 * Holds an alphanumeric value by an alphanumeric key
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class HashMapItem implements HashMapItemInterface
{
    use StructJsonSerializeTrait;

    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $value;

    /**
     * @param string $key
     * @param string $value
     */
    public function __construct(string $key = '', string $value = '')
    {
        $this->key = $key;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return HashMapItemInterface
     */
    public function setValue(string $value): HashMapItemInterface
    {
        $this->value = $value;
        return $this;
    }
}
