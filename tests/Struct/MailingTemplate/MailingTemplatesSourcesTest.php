<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\MailingTemplate;

use Scn\EvalancheSoapStruct\GenericSetterGetterTestCase;

class MailingTemplatesSourcesTest extends GenericSetterGetterTestCase 
{

    /** @var MailingTemplatesSources|null */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new MailingTemplatesSources();
    }
    
    public function methodDataProvider(): array
    {
        return [
            ['TemplateEmail', 'string'],
            ['TemplateText', 'string'],
            ['TemplateWeb', 'string'],
            ['TemplatePdf', 'string'],
            ['TemplateLandingpage', 'string']
        ];
    }
    
    protected function getSubject()
    {
        return $this->subject;
    }
}
