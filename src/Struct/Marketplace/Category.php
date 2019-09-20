<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Marketplace;

use Scn\EvalancheSoapStruct\Struct\Generic\LanguageInterface;

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
     * @var \Scn\EvalancheSoapStruct\Struct\Generic\LanguageInterface[]
     */
    private $text;

    /**
     * @param int $id
     * @param LanguageInterface[] $text
     */
    public function __construct(
        int $id = null,
        array $text = null
    ) {
        $this->id = $id;
        $this->text = $text;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return LanguageInterface[]
     */
    public function getText(): array
    {
        return $this->text;
    }
}
