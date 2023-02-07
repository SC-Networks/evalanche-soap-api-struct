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
        static::assertFalse(
            $this->subject->isHasFallback()
        );

        $this->subject->setHasFallback(true);

        static::assertTrue(
            $this->subject->isHasFallback()
        );
    }

    public function testGetIndividualizationItemsSetGet(): void
    {
        $items = ['some-item'];

        static::assertSame(
            [],
            $this->subject->getIndividualizationItems()
        );

        $this->subject->setIndividualizationItems($items);

        static::assertSame(
            $items,
            $this->subject->getIndividualizationItems()
        );
    }
}
