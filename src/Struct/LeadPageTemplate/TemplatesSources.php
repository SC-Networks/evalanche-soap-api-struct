<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\LeadPageTemplate;

/**
 * Contains the source code of the leadpage
 */
class TemplatesSources implements TemplatesSourcesInterface
{
    public function __construct(
        private null|string $templateWeb = null,
        private null|string $templateLandingpage = null
    ) {
    }

    public function getTemplateWeb(): string
    {
        return (string) $this->templateWeb;
    }

    public function setTemplateWeb(string $templateWeb): TemplatesSourcesInterface
    {
        $this->templateWeb = $templateWeb;

        return $this;
    }

    public function getTemplateLandingpage(): string
    {
        return (string) $this->templateLandingpage;
    }

    public function setTemplateLandingpage(string $templateLandingpage): TemplatesSourcesInterface
    {
        $this->templateLandingpage = $templateLandingpage;

        return $this;
    }
}
