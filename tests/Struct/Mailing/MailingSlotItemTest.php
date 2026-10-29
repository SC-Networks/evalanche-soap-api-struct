<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

use Scn\EvalancheSoapStruct\GenericSetterGetterTestCase;

class MailingSlotItemTest extends GenericSetterGetterTestCase
{
    /** @var MailingSlotItem|null */
    private $subject;
    
    public function setUp(): void
    {
        $this->subject = new MailingSlotItem(
            articleTypeId: 0,
            emailArticleTemplateId: 0,
            textArticleTemplateId: 0,
            landingpageArticleTemplateId: 0,
            pdfArticleTemplateId: 0,
            webArticleTemplateId: 0,
            emailAllowedArticleTemplateIds: [],
            textAllowedArticleTemplateIds: [],
            landingpageAllowedArticleTemplateIds: [],
            webAllowedArticleTemplateIds: [],
        );
    }

    public static function methodDataProvider(): array
    {
        return [
            ['ArticleTypeId', 'int'],
            ['EmailArticleTemplateId', 'int'],
            ['TextArticleTemplateId', 'int'],
            ['LandingpageArticleTemplateId', 'int'],
            ['PdfArticleTemplateId', 'int'],
            ['WebArticleTemplateId', 'int'],
            ['EmailAllowedArticleTemplateIds', 'array'],
            ['TextAllowedArticleTemplateIds', 'array'],
            ['LandingpageAllowedArticleTemplateIds', 'array'],
            ['WebAllowedArticleTemplateIds', 'array'],
        ];
    }

    protected function getSubject()
    {
        return $this->subject;
    }
}
