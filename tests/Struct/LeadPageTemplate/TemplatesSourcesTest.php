<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\LeadPageTemplate;

use Scn\EvalancheSoapStruct\GenericSetterGetterTestCase;

class TemplatesSourcesTest extends GenericSetterGetterTestCase
{

    /** @var TemplatesSources|null */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new TemplatesSources();
    }

    public static function methodDataProvider(): array
    {
        return [
            ['TemplateWeb', 'string'],
            ['TemplateLandingpage', 'string']
        ];
    }

    protected function getSubject()
    {
        return $this->subject;
    }
}
