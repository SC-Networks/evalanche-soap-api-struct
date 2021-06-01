<?php

namespace Scn\EvalancheSoapStruct\Struct\MailingTemplate;

use Scn\EvalancheSoapStruct\Struct\Mailing\MailingConfigurationInterface;

interface MailingTemplateConfigurationInterface extends MailingConfigurationInterface
{
    /**
     * @return string
     */
    public function getContainerType(): string;

    /**
     * @param string $containerType
     *
     * @return $this
     */
    public function setContainerType(string $containerType): MailingTemplateConfiguration;
}
