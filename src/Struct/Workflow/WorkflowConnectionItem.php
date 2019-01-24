<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

/**
 * Represents a connection of two workflow states.
 * Contains information about its source and target node ids and its type.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Workflow
 */
class WorkflowConnectionItem implements WorkflowConnectionItemInterface
{
    /**
     * @var string $source
     */
    private $source;
    /**
     * @var string $target
     */
    private $target;
    /**
     * @var string $type
     */
    private $type;

    public function __construct(
        string $source = '',
        string $target = '',
        string $type = ''
    )
    {
        $this->source = $source;
        $this->target = $target;
        $this->type = $type;
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function getTarget(): string
    {
        return $this->target;
    }

    public function getType(): string
    {
        return $this->type;
    }
}
