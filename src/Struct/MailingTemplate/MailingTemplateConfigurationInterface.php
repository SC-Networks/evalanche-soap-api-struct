<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\MailingTemplate;

use Scn\EvalancheSoapStruct\Struct\Mailing\MailingConfigurationInterface;

interface MailingTemplateConfigurationInterface extends MailingConfigurationInterface
{
    public function getContainerType(): string;

    /**
     *
     * @return $this
     */
    public function setContainerType(string $containerType): MailingTemplateConfiguration;
}
