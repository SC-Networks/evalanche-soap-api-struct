<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Scoring;

/**
 * Represents a scoring group detail element.
 * Contains information about its Id, name, and the client.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Scoring
 */
class ScoringGroupDetail implements ScoringGroupDetailInterface
{
    public function __construct(
        private null|int $id = null,
        private null|string $name = null,
        private null|int $mandatorId = null
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

    public function getMandatorId(): int
    {
        return (int) $this->mandatorId;
    }
}
