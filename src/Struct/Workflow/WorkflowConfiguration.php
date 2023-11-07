<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

/**
 * Represents the result of a workflows getConfiguration call
 */
class WorkflowConfiguration implements WorkflowConfigurationInterface
{
    /** @var string The current config version id */
    private $configVersion;
    
    /** @var string The configuration as json encoded string */
    private $configuration;

    public function __construct(
        string $configVersion = null,
        string $configuration = null
    ) {
        $this->configVersion = $configVersion;
        $this->configuration = $configuration;
    }
    
    public function getConfigVersion(): string
    {
        return $this->configVersion;
    }
    
    public function getConfiguration(): string
    {
        return $this->configuration;
    }
}
