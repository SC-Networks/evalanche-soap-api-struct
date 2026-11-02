<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\MailingTemplate;

use Scn\EvalancheSoapStruct\GenericSetterGetterTestCase;

class MailingTemplateAllowedTemplatesTest extends GenericSetterGetterTestCase
{

    private MailingTemplateAllowedTemplates $subject;

    public function setUp(): void
    {
        $this->subject = new MailingTemplateAllowedTemplates(
            templateType: 0,
            templateIds: [],
        );
    }
    
    public static function methodDataProvider(): array
    {
        return [
            ['TemplateType', 'int'],
            ['TemplateIds', 'array']
        ];
    }

    protected function getSubject(): MailingTemplateAllowedTemplates
    {
        return $this->subject;
    }
}
