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

    /**
     * @param int $id
     * @param string $name
     * @param int $dateStart
     * @param int $dateEnd
     * @param string $externalId
     * @param int $folderId
     * @param string $description
     * @param int $state
     * @param int $profileCount
     */
    public function __construct(
        int $id = null,
        string $name = null,
        int $dateStart = null,
        int $dateEnd = null,
        string $externalId = null,
        int $folderId = null,
        string $description = null,
        int $state = null,
        int $profileCount = null
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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getDateStart(): int
    {
        return $this->dateStart;
    }

    /**
     * @return int
     */
    public function getDateEnd(): int
    {
        return $this->dateEnd;
    }

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

    /**
     * @return int
     */
    public function getFolderId(): int
    {
        return $this->folderId;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getState(): int
    {
        return $this->state;
    }

    /**
     * @return int
     */
    public function getProfileCount(): int
    {
        return $this->profileCount;
    }
}
