<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mandator;

/**
 * Represents an Evalanche Mandator with id, name and domain.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mandator
 */
class Mandator implements MandatorInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $domain;

    public function __construct(int $id = null, string $name = null, string $domain = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->domain = $domain;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDomain(): string
    {
        return $this->domain;
    }
}
