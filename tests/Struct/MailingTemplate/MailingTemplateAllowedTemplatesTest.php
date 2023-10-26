<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\MailingTemplate;

use Scn\EvalancheSoapStruct\GenericSetterGetterTestCase;

class MailingTemplateAllowedTemplatesTest extends GenericSetterGetterTestCase
{

    /** @var MailingTemplateAllowedTemplates|null */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new MailingTemplateAllowedTemplates();
    }
    
    public function methodDataProvider(): array
    {
        return [
            ['TemplateType', 'int'],
            ['TemplateIds', 'array']
        ];
    }

    protected function getSubject()
    {
        return $this->subject;
    }
}
