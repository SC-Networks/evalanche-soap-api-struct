<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

/**
 * Represents the ui coordinates of a workflow's state.
 * Contains information about its x and y coordinates.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Workflow
 */
class WorkflowStateUiItem implements WorkflowStateUiItemInterface
{
    /**
     * @var int
     */
    private $x;

    /**
     * @var int
     */
    private $y;

    public function __construct(
        int $x = 0,
        int $y = 0
    )
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

}
