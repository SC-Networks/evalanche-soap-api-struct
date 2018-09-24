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

    /**
     * @param int $id
     * @param string $name
     * @param int $mandatorId
     */
    public function __construct(int $id = null, string $name = null, int $mandatorId = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->mandatorId = $mandatorId;
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getMandatorId(): int
    {
        return $this->mandatorId;
    }
}