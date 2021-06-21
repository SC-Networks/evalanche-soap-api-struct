<?php

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Represents a config version item
 */
interface WorkflowConfigVersionInterface extends StructInterface
{
    public function getConfigVersion(): string;

    public function getCreateDate(): int;

    public function getLatest(): bool;
}