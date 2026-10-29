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
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $dateStart;

    /**
     * @var int
     */
    private $dateEnd;

    /**
     * @var string
     */
    private $externalId;

    /**
     * @var int
     */
    private $folderId;

    /**
     * @var string
     */
    private $description;

    /**
     * @var int
     */
    private $state;

    /**
     * @var int
     */
    private $profileCount;

    public function __construct(
        int $id = 0,
        string $name = '',
        int $dateStart = 0,
        int $dateEnd = 0,
        string $externalId = '',
        int $folderId = 0,
        string $description = '',
        int $state = 0,
        int $profileCount = 0
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->dateStart = $dateStart;
        $this->dateEnd = $dateEnd;
        $this->externalId = $externalId;
        $this->folderId = $folderId;
        $this->description = $description;
        $this->state = $state;
        $this->profileCount = $profileCount;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDateStart(): int
    {
        return $this->dateStart;
    }

    public function getDateEnd(): int
    {
        return $this->dateEnd;
    }

    public function getExternalId(): string
    {
        return $this->externalId;
    }

    public function getFolderId(): int
    {
        return $this->folderId;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getState(): int
    {
        return $this->state;
    }

    public function getProfileCount(): int
    {
        return $this->profileCount;
    }
}
