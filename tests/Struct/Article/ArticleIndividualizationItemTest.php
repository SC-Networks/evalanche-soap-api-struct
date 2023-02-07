<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Article;

use Scn\EvalancheSoapStruct\StructTestCase;

class ArticleIndividualizationItemTest extends StructTestCase
{
    /** @var ArticleIndividualizationItem */
    private $subject;

    protected function setUp(): void
    {
        $this->subject = new ArticleIndividualizationItem();
    }

    public function testTargetgroupIdSetGet(): void
    {
        $value = 666;

        static::assertSame(
            0,
            $this->subject->getTargetgroupId()
        );

        $this->subject->setTargetgroupId($value);

        static::assertSame(
            $value,
            $this->subject->getTargetgroupId()
        );
    }

    public function testArticleIdSetGet(): void
    {
        $value = 666;

        static::assertSame(
            0,
            $this->subject->getArticleId()
        );

        $this->subject->setArticleId($value);

        static::assertSame(
            $value,
            $this->subject->getArticleId()
        );
    }
}
