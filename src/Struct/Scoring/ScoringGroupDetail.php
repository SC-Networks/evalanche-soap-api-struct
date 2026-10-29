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
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $mandatorId;

    public function __construct(int $id = null, string $name = null, int $mandatorId = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->mandatorId = $mandatorId;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getMandatorId(): int
    {
        return $this->mandatorId;
    }
}
