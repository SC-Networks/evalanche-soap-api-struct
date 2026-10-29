<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Article;

/**
 * Represents a article-id/targetgroup tuple in the article individualization config
 */
class ArticleIndividualizationItem implements ArticleIndividualizationItemInterface
{
    /**
     * @var int
     */
    private $targetgroupId;

    /**
     * @var int
     */
    private $articleId;

    public function __construct(
        int $targetgroupId = 0,
        int $articleId = 0
    ) {
        $this->targetgroupId = $targetgroupId;
        $this->articleId = $articleId;
    }

    public function getTargetgroupId(): int
    {
        return $this->targetgroupId;
    }

    public function setTargetgroupId(int $targetgroupId): void
    {
        $this->targetgroupId = $targetgroupId;
    }

    public function getArticleId(): int
    {
        return $this->articleId;
    }

    public function setArticleId(int $articleId): void
    {
        $this->articleId = $articleId;
    }
}
