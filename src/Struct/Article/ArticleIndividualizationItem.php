<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Article;

/**
 * Represents a article-id/targetgroup tuple in the article individualization config
 */
class ArticleIndividualizationItem implements ArticleIndividualizationItemInterface
{
    public function __construct(
        private null|int $targetgroupId = null,
        private null|int $articleId = null
    ) {
    }

    public function getTargetgroupId(): int
    {
        return (int) $this->targetgroupId;
    }

    public function setTargetgroupId(int $targetgroupId): void
    {
        $this->targetgroupId = $targetgroupId;
    }

    public function getArticleId(): int
    {
        return (int) $this->articleId;
    }

    public function setArticleId(int $articleId): void
    {
        $this->articleId = $articleId;
    }
}
