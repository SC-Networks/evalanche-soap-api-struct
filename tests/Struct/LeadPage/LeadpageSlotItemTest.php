<?php

namespace Scn\EvalancheSoapStruct\Struct\LeadPage;

use Scn\EvalancheSoapStruct\GenericSetterGetterTestCase;

class LeadpageSlotItemTest extends GenericSetterGetterTestCase
{
    /** @var LeadpageSlotItem|null */
    private $subject;
    
    public function setUp(): void
    {
        $this->subject = new LeadpageSlotItem();
    }

    public static function methodDataProvider(): array
    {
        return [
            ['ArticleTypeId', 'int'],
            ['LandingpageArticleTemplateId', 'int'],
            ['WebArticleTemplateId', 'int'],
            ['LandingpageAllowedArticleTemplateIds', 'array'],
            ['WebAllowedArticleTemplateIds', 'array'],
        ];
    }

    protected function getSubject()
    {
        return $this->subject;
    }
}
