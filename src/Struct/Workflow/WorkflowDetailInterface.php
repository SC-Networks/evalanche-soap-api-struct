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
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return int
     */
    public function getDateStart(): int;

    /**
     * @return int
     */
    public function getDateEnd(): int;

    /**
     * @return string
     */
    public function getExternalId(): string;

    /**
     * @return int
     */
    public function getCategoryId(): int;

    /**
     * @return string
     */
    public function getDescription(): string;

    /**
     * @return int
     */
    public function getState(): int;

    /**
     * @return int
     */
    public function getProfileCount(): int;
}