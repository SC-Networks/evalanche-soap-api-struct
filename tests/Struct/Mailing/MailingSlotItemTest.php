<?php

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

use Scn\EvalancheSoapStruct\GenericSetterGetterTestCase;

class MailingSlotItemTest extends GenericSetterGetterTestCase
{
    /** @var MailingSlotItem|null */
    private $subject;
    
    public function setUp(): void
    {
        $this->subject = new MailingSlotItem();
    }

    public function methodDataProvider(): array
    {
        return [
            ['ArticleTypeId', 'int'],
            ['EmailArticleTemplateId', 'int'],
            ['TextArticleTemplateId', 'int'],
            ['WebArticleTemplateId', 'int'],
            ['PdfArticleTemplateId', 'int'],
            ['LandingpageArticleTemplateId', 'int'],
        ];
    }

    protected function getSubject()
    {
        return $this->subject;
    }
}
