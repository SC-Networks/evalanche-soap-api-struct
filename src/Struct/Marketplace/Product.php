<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Marketplace;

/**
 * Represents an Evalanche Marketplace Product
 *
 * @package Scn\EvalancheSoapStruct\Struct\Marketplace
 */
class Product implements ProductInterface
{
    /**
     * Product constructor.
     */
    public function __construct(
        private null|string $id = null,
        private null|string $title = null,
        private null|string $text = null,
        private null|int $price = null
    ) {
    }

    public function getId(): string
    {
        return (string) $this->id;
    }

    public function getTitle(): string
    {
        return (string) $this->title;
    }

    public function getText(): string
    {
        return (string) $this->text;
    }

    public function getPrice(): int
    {
        return (int) $this->price;
    }
}
