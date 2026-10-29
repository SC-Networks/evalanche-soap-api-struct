<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Article;

use Scn\EvalancheSoapStruct\StructTestCase;

class ArticleIndividualizationTest extends StructTestCase
{
    /** @var ArticleIndividualization */
    private $subject;

    protected function setUp(): void
    {
        $this->subject = new ArticleIndividualization();
    }

    public function testHasFallbachSetGet(): void
    {
        self::assertFalse(
            $this->subject->isHasFallback()
        );

        $this->subject->setHasFallback(true);

        self::assertTrue(
            $this->subject->isHasFallback()
        );
    }

    public function testGetIndividualizationItemsSetGet(): void
    {
        $items = ['some-item'];

        self::assertSame(
            [],
            $this->subject->getIndividualizationItems()
        );

        $this->subject->setIndividualizationItems($items);

        self::assertSame(
            $items,
            $this->subject->getIndividualizationItems()
        );
    }
}
