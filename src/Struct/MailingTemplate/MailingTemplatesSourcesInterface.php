<?php

namespace Scn\EvalancheSoapStruct\Struct\MailingTemplate;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Contains the source code of the mailing views
 */
interface MailingTemplatesSourcesInterface extends StructInterface
{

    public function getTemplateEmail(): string;

    public function setTemplateEmail(string $template_email): MailingTemplatesSourcesInterface;

    public function getTemplateText(): string;

    public function setTemplateText(string $template_text): MailingTemplatesSourcesInterface;

    public function getTemplateWeb(): string;

    public function setTemplateWeb(string $template_web): MailingTemplatesSourcesInterface;

    public function getTemplatePdf(): string;

    public function setTemplatePdf(string $template_pdf): MailingTemplatesSourcesInterface;

    public function getTemplateLandingpage(): string;

    public function setTemplateLandingpage(string $template_landingpage): MailingTemplatesSourcesInterface;
}
