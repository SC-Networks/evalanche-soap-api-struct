<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

/**
 * Represents a config version item
 */
class WorkflowConfigVersion implements WorkflowConfigVersionInterface
{
    public function __construct(
        private null|string $configVersion = null,
        private null|int $createDate = null,
        private null|bool $latest = null
    ) {
    }
    
    public function getConfigVersion(): string
    {
        return (string) $this->configVersion;
    }
    
    public function getCreateDate(): int
    {
        return (int) $this->createDate;
    }
    
    public function getLatest(): bool
    {
        return (bool) $this->latest;
    }
}
