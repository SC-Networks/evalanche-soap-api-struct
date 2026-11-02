<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\LeadPageTemplate;

use Scn\EvalancheSoapStruct\GenericSetterGetterTestCase;

class LeadpageTemplateAllowedTemplatesTest extends GenericSetterGetterTestCase
{
    private LeadpageTemplateAllowedTemplates $subject;

    public function setUp(): void
    {
        $this->subject = new LeadpageTemplateAllowedTemplates(
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

    protected function getSubject(): LeadpageTemplateAllowedTemplates
    {
        return $this->subject;
    }
}
