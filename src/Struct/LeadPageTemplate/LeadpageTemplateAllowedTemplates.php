<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\LeadPageTemplate;

/**
 * Contains the source code of the allowed templates
 */
class LeadpageTemplateAllowedTemplates implements LeadpageTemplateAllowedTemplatesInterface
{
    /**
     * @param list<int> $templateIds
     */
    public function __construct(
        private null|int $templateType = null,
        private array $templateIds = []
    ) {
    }

    public function getTemplateType(): int
    {
        return (int) $this->templateType;
    }

    public function setTemplateType(int $templateType): LeadpageTemplateAllowedTemplatesInterface
    {
        $this->templateType = $templateType;

        return $this;
    }

    /** @inheritdoc */
    public function getTemplateIds(): array
    {
        return $this->templateIds;
    }

    /** @inheritdoc */
    public function setTemplateIds(array $templateIds): LeadpageTemplateAllowedTemplatesInterface
    {
        $this->templateIds = $templateIds;

        return $this;
    }
}
