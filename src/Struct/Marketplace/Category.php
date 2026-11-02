<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Marketplace;

/**
 * Represents an Evalanche Marketplace Category
 *
 * @package Scn\EvalancheSoapStruct\Struct\Marketplace
 */
class Category implements CategoryInterface
{
    public function __construct(
        private null|int $id = null,
        private null|string $text = null
    ) {
    }

    public function getId(): int
    {
        return (int) $this->id;
    }

    public function getText(): string
    {
        return (string) $this->text;
    }
}
