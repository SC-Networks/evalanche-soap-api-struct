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
    public function __construct(
        private null|string $key = null,
        private null|string $value = null
    ) {
    }

    public function getKey(): string
    {
        return (string) $this->key;
    }

    public function getValue(): string
    {
        return (string) $this->value;
    }

    public function setValue(string $value): HashMapItemInterface
    {
        $this->value = $value;
        return $this;
    }
}
