<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\LeadPageTemplate;

use Scn\EvalancheSoapStruct\GenericSetterGetterTestCase;

class LeadpageTemplateAllowedTemplatesTest extends GenericSetterGetterTestCase
{
    /** @var LeadpageTemplateAllowedTemplates|null */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new LeadpageTemplateAllowedTemplates();
    }
    
    public static function methodDataProvider(): array
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
