<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\MailingTemplate;

/**
 * Contains the source code of the mailing views
 */
class MailingTemplatesSources implements MailingTemplatesSourcesInterface
{

    public function __construct(
        private null|string $templateEmail = null,
        private null|string $templateText = null,
        private null|string $templateWeb = null,
        private null|string $templatePdf = null,
        private null|string $templateLandingpage = null
    ) {
    }

    public function getTemplateEmail(): string
    {
        return (string) $this->templateEmail;
    }

    public function setTemplateEmail(string $templateEmail): MailingTemplatesSourcesInterface
    {
        $this->templateEmail = $templateEmail;

        return $this;
    }

    public function getTemplateText(): string
    {
        return (string) $this->templateText;
    }

    public function setTemplateText(string $templateText): MailingTemplatesSourcesInterface
    {
        $this->templateText = $templateText;

        return $this;
    }

    public function getTemplateWeb(): string
    {
        return (string) $this->templateWeb;
    }

    public function setTemplateWeb(string $templateWeb): MailingTemplatesSourcesInterface
    {
        $this->templateWeb = $templateWeb;

        return $this;
    }

    public function getTemplatePdf(): string
    {
        return (string) $this->templatePdf;
    }

    public function setTemplatePdf(string $templatePdf): MailingTemplatesSourcesInterface
    {
        $this->templatePdf = $templatePdf;

        return $this;
    }

    public function getTemplateLandingpage(): string
    {
        return (string) $this->templateLandingpage;
    }

    public function setTemplateLandingpage(string $templateLandingpage): MailingTemplatesSourcesInterface
    {
        $this->templateLandingpage = $templateLandingpage;

        return $this;
    }
}
