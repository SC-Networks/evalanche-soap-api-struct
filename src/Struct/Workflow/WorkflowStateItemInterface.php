<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

/**
 * Represents one state of a workflow, also known as a node.
 * Contains information about its id, type and coordinates.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Workflow
 */
interface WorkflowStateItemInterface
{
    public function getId(): string;

    public function getType(): int;

    public function getUi(): WorkflowStateUiItemInterface;
}
