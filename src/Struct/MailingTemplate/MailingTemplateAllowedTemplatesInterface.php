<?php

namespace Scn\EvalancheSoapStruct\Struct\MailingTemplate;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Contains the source code of the allowed templates
 */
interface MailingTemplateAllowedTemplatesInterface extends StructInterface
{
    public function getTemplateType(): int;

    public function setTemplateType(int $templateType): MailingTemplateAllowedTemplatesInterface;

    /**
     * @return int[]
     */
    public function getTemplateIds(): array;

    /**
     * @param int[] $templateIds
     */
    public function setTemplateIds(array $templateIds): MailingTemplateAllowedTemplatesInterface;
}
