<?php

namespace Scn\EvalancheSoapStruct\Struct\LeadPageTemplate;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Contains the source code of the allowed templates
 */
interface LeadpageTemplateAllowedTemplatesInterface extends StructInterface
{
    public function getTemplateType(): int;

    public function setTemplateType(int $templateType): LeadpageTemplateAllowedTemplatesInterface;

    /**
     * @return list<int>
     */
    public function getTemplateIds(): array;

    /**
     * @param list<int> $templateIds
     */
    public function setTemplateIds(array $templateIds): LeadpageTemplateAllowedTemplatesInterface;
}
