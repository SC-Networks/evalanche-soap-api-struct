<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

/**
 * Represents a Language in Evalanche.
 * Contains information the Language Id and Text.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class Language implements LanguageInterface
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
        int $id = null,
        string $text = null
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
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
}
