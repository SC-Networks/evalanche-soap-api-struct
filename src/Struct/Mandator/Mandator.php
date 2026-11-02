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
    public function __construct(
        private null|int $id = null,
        private null|string $name = null,
        private null|string $domain = null
    ) {
    }

    public function getId(): int
    {
        return (int) $this->id;
    }

    public function getName(): string
    {
        return (string) $this->name;
    }

    public function getDomain(): string
    {
        return (string) $this->domain;
    }
}
