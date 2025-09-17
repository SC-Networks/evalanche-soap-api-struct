<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
interface JobStateInterface extends StructInterface
{
    /**
     * Returns the id of the background-job
     */
    public function getId(): string;

    /**
     * Returns the status-code of the background-job
     */
    public function getStatus(): int;

    /**
     * Returns a textual representation of the status-code
     */
    public function getStatusDescription(): string;
}
