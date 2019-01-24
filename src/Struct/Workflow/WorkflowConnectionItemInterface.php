<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Workflow;


/**
 * Represents a connection of two workflow states.
 * Contains information about its source and target node ids and its type.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Workflow
 */
interface WorkflowConnectionItemInterface
{
    public function getSource(): string;

    public function getTarget(): string;

    public function getType(): string;
}
