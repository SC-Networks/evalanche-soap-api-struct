<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Workflow;


/**
 * Represents the ui coordinates of a workflow's state.
 * Contains information about its x and y coordinates.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Workflow
 */
interface WorkflowStateUiItemInterface
{
    public function getX(): int;

    public function getY(): int;
}
