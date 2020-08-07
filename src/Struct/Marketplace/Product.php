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
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $text;

    /**
     * @var int
     */
    private $price;

    /**
     * Product constructor.
     * @param string $id
     * @param string $title
     * @param string $text
     * @param int $price
     */
    public function __construct(
        string $id = null,
        string $title = null,
        string $text = null,
        int $price = null
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->text = $text;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }
}
