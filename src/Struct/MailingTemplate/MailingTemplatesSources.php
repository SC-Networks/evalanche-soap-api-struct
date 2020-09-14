<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\MailingTemplate;

/**
 * Contains the source code of the mailing views
 */
class MailingTemplatesSources implements MailingTemplatesSourcesInterface
{

    /** @var string */
    private $templateEmail;

    /** @var string */
    private $templateText;

    /** @var string */
    private $templateWeb;

    /** @var string */
    private $templatePdf;

    /** @var string */
    private $templateLandingpage;

    public function __construct(
        string $templateEmail = null,
        string $templateText = null,
        string $templateWeb = null,
        string $templatePdf = null,
        string $templateLandingpage = null
    ) {
        $this->templateEmail = $templateEmail;
        $this->templateText = $templateText;
        $this->templateWeb = $templateWeb;
        $this->templatePdf = $templatePdf;
        $this->templateLandingpage = $templateLandingpage;
    }

    public function getTemplateEmail(): string
    {
        return $this->templateEmail;
    }

    public function setTemplateEmail(string $templateEmail): MailingTemplatesSourcesInterface
    {
        $this->templateEmail = $templateEmail;

        return $this;
    }

    public function getTemplateText(): string
    {
        return $this->templateText;
    }

    public function setTemplateText(string $templateText): MailingTemplatesSourcesInterface
    {
        $this->templateText = $templateText;

        return $this;
    }

    public function getTemplateWeb(): string
    {
        return $this->templateWeb;
    }

    public function setTemplateWeb(string $templateWeb): MailingTemplatesSourcesInterface
    {
        $this->templateWeb = $templateWeb;

        return $this;
    }

    public function getTemplatePdf(): string
    {
        return $this->templatePdf;
    }

    public function setTemplatePdf(string $templatePdf): MailingTemplatesSourcesInterface
    {
        $this->templatePdf = $templatePdf;

        return $this;
    }

    public function getTemplateLandingpage(): string
    {
        return $this->templateLandingpage;
    }

    public function setTemplateLandingpage(string $templateLandingpage): MailingTemplatesSourcesInterface
    {
        $this->templateLandingpage = $templateLandingpage;

        return $this;
    }
}
