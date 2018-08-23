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

    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return int
     */
    public function getScoringGroupId(): int;

    /**
     * @return int
     */
    public function getScoringTypeId(): int;

    /**
     * @return int
     */
    public function getTimestamp(): int;

    /**
     * @return int
     */
    public function getScore(): int;

    /**
     * @return int
     */
    public function getResourceId(): int;
}