<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

/**
 * Represents one state of a workflow, also known as a node.
 * Contains information about its id, type and coordinates.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Workflow
 */
class WorkflowStateItem implements WorkflowStateItemInterface
{
    /**
     * @var string $id
     */
    private $id;

    /**
     * @var int $type
     */
    private $type;

    /**
     * @var WorkflowStateUiItemInterface $ui
     */
    private $ui;

    public function __construct(
        string $id = '',
        int $type = 0,
        WorkflowStateUiItemInterface $ui = null
    )
    {
        $this->id = $id;
        $this->type = $type;
        $this->ui = $ui;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getType(): int
    {
        return $this->type;
    }

    public function getUi(): WorkflowStateUiItemInterface
    {
        return $this->ui;
    }

}
