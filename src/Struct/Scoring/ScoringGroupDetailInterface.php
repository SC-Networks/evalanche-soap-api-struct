<?php

namespace Scn\EvalancheSoapStruct\Struct\Scoring;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface ScoringGroupDetailInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Scoring
 */
interface ScoringGroupDetailInterface extends StructInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return int
     */
    public function getMandatorId(): int;
}
