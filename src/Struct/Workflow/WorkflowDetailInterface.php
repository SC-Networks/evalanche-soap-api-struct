<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface WorkflowDetailInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Workflow
 */
interface WorkflowDetailInterface extends StructInterface
{
    public function getId(): int;

    public function getName(): string;

    public function getDateStart(): int;

    public function getDateEnd(): int;

    public function getExternalId(): string;

    public function getFolderId(): int;

    public function getDescription(): string;

    public function getState(): int;

    public function getProfileCount(): int;
}
