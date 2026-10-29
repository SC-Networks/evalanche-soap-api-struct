<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\LeadPage;

use Scn\EvalancheSoapStruct\GenericSetterGetterTestCase;

class LeadpageSlotItemTest extends GenericSetterGetterTestCase
{
    /** @var LeadpageSlotItem|null */
    private $subject;
    
    public function setUp(): void
    {
        $this->subject = new LeadpageSlotItem(
            articleTypeId: 0,
            landingpageArticleTemplateId: 0,
            webArticleTemplateId: 0,
            landingpageAllowedArticleTemplateIds: [],
            webAllowedArticleTemplateIds: [],
        );
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
