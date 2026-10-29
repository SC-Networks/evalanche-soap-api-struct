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
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $text;

    public function __construct(
        int $id = 0,
        string $text = ''
    ) {
        $this->id = $id;
        $this->text = $text;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getText(): string
    {
        return $this->text;
    }
}
