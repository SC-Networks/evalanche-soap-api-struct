<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Marketplace;

use Scn\EvalancheSoapStruct\Struct\Generic\LanguageInterface;

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
     * @var int
     */
    private $price;

    /**
     * @var LanguageInterface[]
     */
    private $text;

    /**
     * Product constructor.
     * @param string $id
     * @param int $price
     * @param LanguageInterface[] $text
     */
    public function __construct(
        string $id = null,
        int $price = null,
        array $text = null
    ) {
        $this->id = $id;
        $this->price = $price;
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @return LanguageInterface[]
     */
    public function getText(): array
    {
        return $this->text;
    }
}
