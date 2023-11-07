<?php

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

/**
 * Represents a config version item
 */
class WorkflowConfigVersion implements WorkflowConfigVersionInterface
{
    /** @var string */
    private $configVersion;
    
    /** @var int */
    private $createDate;
    
    /** @var bool */
    private $latest;
    
    public function __construct(
        string $configVersion = null,
        int $createDate = null,
        bool $latest = null
    ) {
        $this->configVersion = $configVersion;
        $this->createDate = $createDate;
        $this->latest = $latest;
    }
    
    public function getConfigVersion(): string
    {
        return $this->configVersion;
    }
    
    public function getCreateDate(): int
    {
        return $this->createDate;
    }
    
    public function getLatest(): bool
    {
        return $this->latest;
    }
}
