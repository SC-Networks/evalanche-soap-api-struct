<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\MailingTemplate;

/**
 * Contains the source code of the allowed templates
 */
class MailingTemplateAllowedTemplates implements MailingTemplateAllowedTemplatesInterface
{

    public function __construct(
        private null|int $templateType = null,
        /** @var int[] */
        private array $templateIds = []
    ) {
    }

    public function getTemplateType(): int
    {
        return (int) $this->templateType;
    }

    public function setTemplateType(int $templateType): MailingTemplateAllowedTemplatesInterface
    {
        $this->templateType = $templateType;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getTemplateIds(): array
    {
        return $this->templateIds;
    }

    /**
     * @param int[] $templateIds
     */
    public function setTemplateIds(array $templateIds): MailingTemplateAllowedTemplatesInterface
    {
        $this->templateIds = $templateIds;

        return $this;
    }
}
