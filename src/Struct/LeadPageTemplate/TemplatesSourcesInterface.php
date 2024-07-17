<?php

namespace Scn\EvalancheSoapStruct\Struct\LeadPageTemplate;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Contains the source code of the leadpage
 */
interface TemplatesSourcesInterface extends StructInterface
{
    public function getTemplateWeb(): ?string;

    public function setTemplateWeb(string $template_web): TemplatesSourcesInterface;

    public function getTemplateLandingpage(): ?string;

    public function setTemplateLandingpage(string $template_landingpage): TemplatesSourcesInterface;
}
