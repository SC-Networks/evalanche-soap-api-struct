<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\MailingTemplate;

use Scn\EvalancheSoapStruct\GenericSetterGetterTestCase;

class MailingTemplatesSourcesTest extends GenericSetterGetterTestCase
{

    private MailingTemplatesSources $subject;

    public function setUp(): void
    {
        $this->subject = new MailingTemplatesSources(
            templateEmail: '',
            templateText: '',
            templateWeb: '',
            templatePdf: '',
            templateLandingpage: '',
        );
    }
    
    public static function methodDataProvider(): array
    {
        return [
            ['TemplateEmail', 'string'],
            ['TemplateText', 'string'],
            ['TemplateWeb', 'string'],
            ['TemplatePdf', 'string'],
            ['TemplateLandingpage', 'string']
        ];
    }

    protected function getSubject(): MailingTemplatesSources
    {
        return $this->subject;
    }
}
