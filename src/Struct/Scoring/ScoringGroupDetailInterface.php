<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Scoring;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface ScoringGroupDetailInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Scoring
 */
interface ScoringGroupDetailInterface extends StructInterface
{
    public function getId(): int;

    public function getName(): string;

    public function getMandatorId(): int;
}
