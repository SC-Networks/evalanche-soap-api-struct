<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

/**
 * Represents the result of a workflows getConfiguration call
 */
class WorkflowConfiguration implements WorkflowConfigurationInterface
{
    public function __construct(
        /** @var null|string The current config version id */
        private null|string $configVersion = null,
        /** @var null|string The configuration as json encoded string */
        private null|string $configuration = null
    ) {
    }
    
    public function getConfigVersion(): string
    {
        return (string) $this->configVersion;
    }
    
    public function getConfiguration(): string
    {
        return (string) $this->configuration;
    }
}
