<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

/**
 * Represents a workflow, in Evalanche called a campaign.
 * Contains information about its id, name, description, start and end times, number of profiles, and current status.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Workflow
 */
class WorkflowDetail implements WorkflowDetailInterface
{
    public function __construct(
        private null|int $id = null,
        private null|string $name = null,
        private null|int $dateStart = null,
        private null|int $dateEnd = null,
        private null|string $externalId = null,
        private null|int $folderId = null,
        private null|string $description = null,
        private null|int $state = null,
        private null|int $profileCount = null
    ) {
    }

    public function getId(): int
    {
        return (int) $this->id;
    }

    public function getName(): string
    {
        return (string) $this->name;
    }

    public function getDateStart(): int
    {
        return (int) $this->dateStart;
    }

    public function getDateEnd(): int
    {
        return (int) $this->dateEnd;
    }

    public function getExternalId(): string
    {
        return (string) $this->externalId;
    }

    public function getFolderId(): int
    {
        return (int) $this->folderId;
    }

    public function getDescription(): string
    {
        return (string) $this->description;
    }

    public function getState(): int
    {
        return (int) $this->state;
    }

    public function getProfileCount(): int
    {
        return (int) $this->profileCount;
    }
}
