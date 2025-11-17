<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\LeadPageTemplate;

/**
 * Contains the source code of the allowed templates
 */
class LeadpageTemplateAllowedTemplates implements LeadpageTemplateAllowedTemplatesInterface
{
    /** @var int */
    private $templateType;

    /** @var list<int> */
    private $templateIds;

    /**
     * @param list<int> $templateIds
     */
    public function __construct(
        int $templateType = null,
        array $templateIds = null
    ) {
        $this->templateType = $templateType;
        $this->templateIds = $templateIds;
    }

    public function getTemplateType(): int
    {
        return $this->templateType;
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
