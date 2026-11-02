<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\LeadPageTemplate;

use Scn\EvalancheSoapStruct\GenericSetterGetterTestCase;

class TemplatesSourcesTest extends GenericSetterGetterTestCase
{

    private TemplatesSources $subject;

    public function setUp(): void
    {
        $this->subject = new TemplatesSources(
            templateWeb: '',
            templateLandingpage: '',
        );
    }

    public static function methodDataProvider(): array
    {
        return [
            ['TemplateWeb', 'string'],
            ['TemplateLandingpage', 'string']
        ];
    }

    protected function getSubject(): TemplatesSources
    {
        return $this->subject;
    }
}
