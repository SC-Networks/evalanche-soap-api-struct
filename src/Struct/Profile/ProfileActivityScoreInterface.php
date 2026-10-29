<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Profile;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface ProfileActivityScoreInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Profile
 */
interface ProfileActivityScoreInterface extends StructInterface
{

    public function getId(): int;

    public function getScoringGroupId(): int;

    public function getScoringTypeId(): int;

    public function getTimestamp(): int;

    public function getScore(): int;

    public function getResourceId(): int;
}
