<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\LeadPageTemplate;

/**
 * Contains the source code of the leadpage
 */
class TemplatesSources implements TemplatesSourcesInterface
{
    /** @var string|null */
    private $templateWeb;

    /** @var string|null */
    private $templateLandingpage;

    public function __construct(
        string $templateWeb = null,
        string $templateLandingpage = null
    ) {
        $this->templateWeb = $templateWeb;
        $this->templateLandingpage = $templateLandingpage;
    }

    public function getTemplateWeb(): ?string
    {
        return $this->templateWeb;
    }

    public function setTemplateWeb(string $templateWeb): TemplatesSourcesInterface
    {
        $this->templateWeb = $templateWeb;

        return $this;
    }

    public function getTemplateLandingpage(): ?string
    {
        return $this->templateLandingpage;
    }

    public function setTemplateLandingpage(string $templateLandingpage): TemplatesSourcesInterface
    {
        $this->templateLandingpage = $templateLandingpage;

        return $this;
    }
}
